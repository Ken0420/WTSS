$ErrorActionPreference = 'Stop'

$script:ProjectRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$script:TemplateRoot = Join-Path $script:ProjectRoot 's\templates'
$script:OutputRoot = Join-Path $script:ProjectRoot 'html'
$script:AssetsRoot = Join-Path $script:ProjectRoot 'assets'
$script:Utf8NoBom = New-Object System.Text.UTF8Encoding($false)
$script:RouteTargets = @{
    'home' = 'pages\thinksmart_pages\home.html'
    'products' = 'pages\thinksmart_pages\products.html'
    'agreements' = 'pages\thinksmart_pages\agreements.html'
    'about-us' = 'pages\shared_pages\about_us.html'
    'blog' = 'pages\shared_pages\blog.html'
    'blog-overview' = 'pages\shared_pages\blog_overview.html'
    'contact-us' = 'pages\shared_pages\contact_us.html'
    'franchising' = 'pages\shared_pages\franchising.html'
    'partners' = 'pages\shared_pages\partners.html'
    'product_pages.home' = 'pages\product_pages\home.html'
    'product_pages.features' = 'pages\product_pages\features.html'
    'product_pages.pricing' = 'pages\product_pages\pricing.html'
    'product_pages.download' = 'pages\product_pages\download.html'
    'product_pages.signup' = 'pages\product_pages\sign_up.html'
    'product_pages.about-us' = 'pages\shared_pages\about_us.html'
    'product_pages.blog' = 'pages\shared_pages\blog.html'
    'product_pages.contact-us' = 'pages\shared_pages\contact_us.html'
}

function Get-RelativeUrl {
    param(
        [Parameter(Mandatory = $true)][string]$FromFile,
        [Parameter(Mandatory = $true)][string]$ToPath,
        [switch]$ToDirectory
    )

    $fromDirectory = [System.IO.Path]::GetDirectoryName([System.IO.Path]::GetFullPath($FromFile))
    if ($ToDirectory) {
        $targetPath = [System.IO.Path]::GetFullPath($ToPath).TrimEnd('\') + '\'
    }
    else {
        $targetPath = [System.IO.Path]::GetFullPath($ToPath)
    }

    $fromUri = New-Object System.Uri($fromDirectory.TrimEnd('\') + '\')
    $targetUri = New-Object System.Uri($targetPath)
    return [System.Uri]::UnescapeDataString($fromUri.MakeRelativeUri($targetUri).ToString()).Replace('\', '/')
}

function Get-StaticValue {
    param(
        [Parameter(Mandatory = $true)][string]$Expression,
        [Parameter(Mandatory = $true)][hashtable]$Context
    )

    $value = $Expression.Trim()
    if ($value -match "^(['""])(.*)\1$") {
        return $Matches[2]
    }

    switch -Regex ($value) {
        '^product\.lowercase_name$' {
            if ($Context.HasProduct) { return 'classbiz' }
            return ''
        }
        '^product\.Name$' {
            if ($Context.HasProduct) { return 'ClassBiz' }
            return ''
        }
        '^product\.prefix$' {
            if ($Context.HasProduct) { return 'Class' }
            return ''
        }
        '^environment$' { return 'preview' }
        '^route_name$' { return '' }
        '^xero$' { return $false }
        '^i$' { return 0 }
        '^get_user_country\(\)$' { return 'AU' }
        '^get_user_country_name\(\)$' { return 'Australia' }
        default { return $null }
    }
}

function Test-StaticCondition {
    param(
        [Parameter(Mandatory = $true)][string]$Expression,
        [Parameter(Mandatory = $true)][hashtable]$Context
    )

    $condition = $Expression.Trim()
    while ($condition.StartsWith('(') -and $condition.EndsWith(')')) {
        $condition = $condition.Substring(1, $condition.Length - 2).Trim()
    }

    if ($condition -match '^not\s+(.+)$') {
        return -not (Test-StaticCondition -Expression $Matches[1] -Context $Context)
    }
    if ($condition -match '^(.+?)\s+or\s+(.+)$') {
        return (Test-StaticCondition -Expression $Matches[1] -Context $Context) -or
            (Test-StaticCondition -Expression $Matches[2] -Context $Context)
    }
    if ($condition -match '^(.+?)\s+and\s+(.+)$') {
        return (Test-StaticCondition -Expression $Matches[1] -Context $Context) -and
            (Test-StaticCondition -Expression $Matches[2] -Context $Context)
    }
    if ($condition -match '^product\s+is\s+defined$') {
        return [bool]$Context.HasProduct
    }
    if ($condition -match '^product\.lowercase_name\s*==\s*[''"]([^''"]+)[''"]$') {
        return [bool]$Context.HasProduct -and ($Matches[1] -eq 'classbiz')
    }
    if ($condition -match '^product\.lowercase_name\s*!=\s*[''"]([^''"]+)[''"]$') {
        return [bool]$Context.HasProduct -and ($Matches[1] -ne 'classbiz')
    }
    if ($condition -match '^environment\s*==\s*[''"]live[''"]$') { return $false }
    if ($condition -match '^environment\s*!=\s*[''"]live[''"]$') { return $true }
    if ($condition -match '^get_user_country\(\)\s*==\s*[''"]([^''"]+)[''"]$') {
        return $Matches[1] -eq 'AU'
    }
    if ($condition -match '^get_user_country\(\)\s*!=\s*[''"]([^''"]+)[''"]$') {
        return $Matches[1] -ne 'AU'
    }
    if ($condition -match '^(?:route_name|xero)\b') { return $false }
    if ($condition -match '^i\s*==\s*0$') { return $true }

    if ($condition -match '^(.+?)\s*(==|!=)\s*(.+)$') {
        $left = Get-StaticValue -Expression $Matches[1] -Context $Context
        $operator = $Matches[2]
        $right = Get-StaticValue -Expression $Matches[3] -Context $Context
        if ($null -ne $left -and $null -ne $right) {
            if ($operator -eq '==') { return "$left" -eq "$right" }
            return "$left" -ne "$right"
        }
    }

    if ($condition -match '^(true|false)$') { return $condition -eq 'true' }
    if ($condition -match '^(environment|route_name|xero)$') { return $false }
    return $true
}

function Get-StaticExpression {
    param(
        [Parameter(Mandatory = $true)][string]$Expression,
        [Parameter(Mandatory = $true)][hashtable]$Context
    )

    $value = $Expression.Trim()
    $value = $value -replace '\s*\|\s*(raw|e|escape|url_encode|striptags)\b.*$', ''
    if ($value -match "^path_for\s*\(\s*\(\s*product\s+is\s+defined\s*\?\s*['""]([^'""]+)['""]\s*:\s*['""]([^'""]+)['""]") {
        $route = $(if ($Context.HasProduct) { $Matches[1] } else { $Matches[2] })
        if ($script:RouteTargets.ContainsKey($route)) {
            $target = Join-Path $script:OutputRoot $script:RouteTargets[$route]
            return Get-RelativeUrl -FromFile $Context.OutputFile -ToPath $target
        }
        return '#'
    }
    if ($value -match '^path_for\s*\(\s*[''"]([^''"]+)[''"]') {
        $route = $Matches[1]
        if ($script:RouteTargets.ContainsKey($route)) {
            $target = Join-Path $script:OutputRoot $script:RouteTargets[$route]
            return Get-RelativeUrl -FromFile $Context.OutputFile -ToPath $target
        }
        return '#'
    }
    if ($value -eq 'meta_tags') { return '<!-- Dynamic SEO metadata omitted from static export. -->' }
    if ($value -eq 'icon_links') { return '<!-- Dynamic favicon links omitted from static export. -->' }
    if ($value -match "^include\s*\(\s*template_from_string\s*\(\s*template_slots\.([a-zA-Z0-9_]+)") {
        if ($Matches[1] -eq 'agreement_body') { return 'Basic lorem' }
        return "[Template content: $($Matches[1])]"
    }
    if ($value -match "^template_slots\.agreement_title$") { return 'Agreements' }
    if ($value -match "^template_slots\.agreement_body$") { return 'Basic lorem' }
    if ($value -eq 'frontend_base_url') { return $Context.AssetBase }
    if ($value -eq 'css_id') { return $Context.CssId }
    if ($value -eq 'product.lowercase_name') {
        if ($Context.HasProduct) { return 'classbiz' }
        return ''
    }
    if ($value -eq 'product.Name') {
        if ($Context.HasProduct) { return 'ClassBiz' }
        return ''
    }
    if ($value -eq 'product.prefix') {
        if ($Context.HasProduct) { return 'Class' }
        return ''
    }
    if ($value -match '\.Path$') { return $Context.ImagePlaceholder }
    if ($value -eq 'get_user_country()') { return 'AU' }
    if ($value -eq 'get_user_country_name()') { return 'Australia' }
    if ($value -match '^current_url\|url_encode$') { return '[current URL]' }
    if ($value -match '^xero\s*\?') { return '' }
    if ($value -match '^i\s*==\s*0\s*\?') { return 'active' }
    if ($value -match "^\(route_name.*\)\s*\?") { return '' }

    if ($value -match "^(.+?)\s*\?\s*(['""])(.*?)\2\s*:\s*(['""])(.*?)\4$") {
        if (Test-StaticCondition -Expression $Matches[1] -Context $Context) {
            return $Matches[3]
        }
        return $Matches[5]
    }

    $label = $value -replace '\|.*$', ''
    $label = $label -replace '[^a-zA-Z0-9_. -]', ''
    if ([string]::IsNullOrWhiteSpace($label)) { $label = 'value' }
    return "[Template data: $label]"
}

function Convert-TwigText {
    param(
        [Parameter(Mandatory = $true)][string]$Text,
        [Parameter(Mandatory = $true)][string]$TemplateFile,
        [Parameter(Mandatory = $true)][hashtable]$Context,
        [string[]]$IncludeStack = @()
    )

    $active = $true
    $frames = New-Object System.Collections.ArrayList
    $result = New-Object System.Text.StringBuilder
    $pattern = '(?s)\{#.*?#\}|\{\{.*?\}\}|\{%.*?%\}'
    $twigMatches = [regex]::Matches($Text, $pattern)
    $position = 0

    foreach ($token in $twigMatches) {
        if ($active -and $token.Index -gt $position) {
            [void]$result.Append($Text.Substring($position, $token.Index - $position))
        }

        $tokenText = $token.Value
        if ($tokenText.StartsWith('{#')) {
            $position = $token.Index + $token.Length
            continue
        }
        if ($tokenText.StartsWith('{{')) {
            if ($active) {
                $expression = $tokenText.Substring(2, $tokenText.Length - 4).Trim()
                [void]$result.Append((Get-StaticExpression -Expression $expression -Context $Context))
            }
            $position = $token.Index + $token.Length
            continue
        }

        $statement = $tokenText.Substring(2, $tokenText.Length - 4).Trim()
        if ($statement -match '^if\s+(.+)$') {
            $parentActive = $active
            $matchesCondition = Test-StaticCondition -Expression $Matches[1] -Context $Context
            $frame = @{
                ParentActive = $parentActive
                Matched = [bool]$matchesCondition
                Active = [bool]($parentActive -and $matchesCondition)
            }
            [void]$frames.Add($frame)
            $active = $frame.Active
        }
        elseif ($statement -match '^elseif\s+(.+)$') {
            if ($frames.Count -gt 0) {
                $frame = $frames[$frames.Count - 1]
                $matchesCondition = Test-StaticCondition -Expression $Matches[1] -Context $Context
                $frame.Active = [bool]($frame.ParentActive -and -not $frame.Matched -and $matchesCondition)
                $frame.Matched = [bool]($frame.Matched -or $matchesCondition)
                $active = $frame.Active
            }
        }
        elseif ($statement -eq 'else') {
            if ($frames.Count -gt 0) {
                $frame = $frames[$frames.Count - 1]
                $frame.Active = [bool]($frame.ParentActive -and -not $frame.Matched)
                $frame.Matched = $true
                $active = $frame.Active
            }
        }
        elseif ($statement -eq 'endif') {
            if ($frames.Count -gt 0) {
                $frame = $frames[$frames.Count - 1]
                $active = $frame.ParentActive
                $frames.RemoveAt($frames.Count - 1)
            }
        }
        elseif ($statement -match '^include\s+[''"]([^''"]+)[''"]') {
            if ($active) {
                $includePath = Join-Path $script:TemplateRoot $Matches[1]
                $includeFullPath = [System.IO.Path]::GetFullPath($includePath)
                if ($IncludeStack -contains $includeFullPath) {
                    throw "Circular Twig include detected at $includeFullPath"
                }
                $includeContent = [System.IO.File]::ReadAllText($includeFullPath)
                $nestedStack = @($IncludeStack) + @($includeFullPath)
                $convertedInclude = Convert-TwigText -Text $includeContent -TemplateFile $includeFullPath -Context $Context -IncludeStack $nestedStack
                [void]$result.Append($convertedInclude)
            }
        }
        elseif ($statement -match '^for\s+.+?\s+in\s+(.+)$') {
            $parentActive = $active
            $hasSample = $Matches[1].Trim() -ne 'utm_params'
            $frame = @{
                ParentActive = $parentActive
                Matched = [bool]$hasSample
                Active = [bool]($parentActive -and $hasSample)
            }
            [void]$frames.Add($frame)
            $active = $frame.Active
        }
        elseif ($statement -eq 'endfor') {
            if ($frames.Count -gt 0) {
                $frame = $frames[$frames.Count - 1]
                $active = $frame.ParentActive
                $frames.RemoveAt($frames.Count - 1)
            }
        }
        elseif ($statement -match '^set\b') {
            # Static exports do not evaluate Twig assignments.
        }
        elseif ($active) {
            [void]$result.Append("<!-- Unresolved Twig statement: $statement -->")
        }

        $position = $token.Index + $token.Length
    }

    if ($active -and $position -lt $Text.Length) {
        [void]$result.Append($Text.Substring($position))
    }

    return $result.ToString()
}

function New-StaticContext {
    param(
        [Parameter(Mandatory = $true)][string]$SourceFile,
        [Parameter(Mandatory = $true)][string]$OutputFile
    )

    $relativeSource = $SourceFile.Substring($script:TemplateRoot.Length).TrimStart('\')
    $hasProduct = $relativeSource.StartsWith('pages\product_pages\', [System.StringComparison]::OrdinalIgnoreCase)
    $assetBase = Get-RelativeUrl -FromFile $OutputFile -ToPath $script:ProjectRoot -ToDirectory
    return @{
        HasProduct = $hasProduct
        CssId = $(if ($hasProduct) { 'cb' } else { 'tss' })
        AssetBase = $assetBase
        ImagePlaceholder = $(if ($hasProduct) { 'assets/img/classbiz/classbiz-hero-image-all.png' } else { 'assets/img/thinksmart/thinksmart-allsoftware.png' })
        OutputFile = $OutputFile
    }
}

if (-not (Test-Path $script:TemplateRoot -PathType Container)) {
    throw "Template directory not found: $script:TemplateRoot"
}

New-Item -ItemType Directory -Force -Path $script:OutputRoot | Out-Null
$sourceAssets = Join-Path $script:ProjectRoot 's\assets'
if (-not (Test-Path (Join-Path $sourceAssets 'css\base.css') -PathType Leaf)) {
    throw "Required stylesheet not found: $(Join-Path $sourceAssets 'css\base.css')"
}
if (-not (Test-Path $sourceAssets -PathType Container)) {
    throw "Asset directory not found: $sourceAssets"
}
New-Item -ItemType Directory -Force -Path $script:AssetsRoot | Out-Null
Copy-Item -Path (Join-Path $sourceAssets '*') -Destination $script:AssetsRoot -Recurse -Force

$templateFiles = @(Get-ChildItem -Path $script:TemplateRoot -Recurse -File -Filter '*.twig' | Sort-Object FullName)
$exportedFiles = New-Object System.Collections.Generic.List[string]

foreach ($template in $templateFiles) {
    $relativePath = $template.FullName.Substring($script:TemplateRoot.Length).TrimStart('\')
    $outputRelativePath = $relativePath -replace '\.twig$', ''
    $outputFile = Join-Path $script:OutputRoot $outputRelativePath
    $outputDirectory = Split-Path -Parent $outputFile
    New-Item -ItemType Directory -Force -Path $outputDirectory | Out-Null

    $context = New-StaticContext -SourceFile $template.FullName -OutputFile $outputFile
    $source = [System.IO.File]::ReadAllText($template.FullName)
    $converted = Convert-TwigText -Text $source -TemplateFile $template.FullName -Context $context -IncludeStack @($template.FullName)

    $converted = [regex]::Replace($converted, '(?is)<!-- Facebook Pixel Code -->.*?<!-- End Facebook Pixel Code -->', '<!-- Tracking pixel omitted from static export. -->')
    $converted = [regex]::Replace($converted, '(?is)<!-- Google Tag Manager \(noscript\) -->.*?<!-- End Google Tag Manager \(noscript\) -->', '')
    $converted = [regex]::Replace($converted, '(?i)<link\b[^>]*href=["''][^"'']*cookieconsent[^"'']*["''][^>]*>', '')
    $converted = [regex]::Replace($converted, '(?i)<script\b[^>]*src=["''][^"'']*cookieconsent[^"'']*["''][^>]*>\s*</script>', '')
    $converted = [regex]::Replace($converted, '(?is)window\.cookieconsent\.initialise\s*\(\s*\{.*?\}\s*\);\s*', '')
    $scriptBlocks = [regex]::Matches($converted, '(?is)<script\b[^>]*>.*?</script>')
    for ($index = $scriptBlocks.Count - 1; $index -ge 0; $index--) {
        $scriptBlock = $scriptBlocks[$index]
        if ($scriptBlock.Value -match '(?i)googletagmanager\.com/(gtag/js|gtm\.js)|fast\.wistia\.com|\bfunction\s+gtag\b|\bgtag\s*\(|\bdataLayer\b|GTM-[A-Z0-9]+') {
            $converted = $converted.Remove($scriptBlock.Index, $scriptBlock.Length)
        }
    }
    $converted = [regex]::Replace($converted, '(?is)<script\b(?=[^>]*type=["'']application/ld\+json["''])[^>]*>.*?\[Template data:.*?</script>', '<!-- Dynamic structured data omitted from static export. -->')
    $converted = [regex]::Replace($converted, '(?i)<script\b[^>]*src=["''](?:https?:)?//fast\.wistia\.com/embed/medias/\[Template data: template_slots\.video_embed_code\]\.jsonp["''][^>]*>\s*</script>', '<!-- Video embed omitted; no video ID is available in a static export. -->')
    $converted = $converted -replace ',\s*target-densityDpi=device-dpi', ''

    if ($template.Extension -eq '.twig' -and $template.Name -eq 'sitemap.xml.twig') {
        $converted = $converted -replace '(<\?xml[^>]+\?>)', ('$1' + "`r`n<!-- Static template export; replace [Template data: ...] values with live sitemap data. -->")
    }
    elseif ($converted -notmatch '(?is)<html(?:\s|>)') {
        $converted = "<!DOCTYPE html>`r`n<html lang=`"en`">`r`n<head>`r`n    <meta charset=`"UTF-8`">`r`n    <meta name=`"viewport`" content=`"width=device-width, initial-scale=1`">`r`n    <title>Static template preview</title>`r`n</head>`r`n<body>`r`n$converted`r`n</body>`r`n</html>"
    }
    else {
        $converted = "<!-- Static template export; replace [Template data: ...] values with live data. -->`r`n$converted"
    }

    $converted = $converted -replace '\.html\.html\b', '.html'
    $stylesheetUrl = "$(Get-RelativeUrl -FromFile $outputFile -ToPath $script:AssetsRoot -ToDirectory)css/base.css"
    if ($template.Extension -eq '.twig' -and $template.Name -ne 'sitemap.xml.twig' -and $converted -notmatch [regex]::Escape($stylesheetUrl)) {
        $stylesheetTag = "    <link rel=`"stylesheet`" href=`"$stylesheetUrl`">"
        if ($converted -match '(?i)<head\b[^>]*>') {
            $converted = [regex]::Replace($converted, '(?i)(<head\b[^>]*>)', "`$1`r`n$stylesheetTag", [System.Text.RegularExpressions.RegexOptions]::IgnoreCase)
        }
    }

    [System.IO.File]::WriteAllText($outputFile, $converted, $script:Utf8NoBom)
    $exportedFiles.Add($outputRelativePath)
}

$indexFile = Join-Path $script:OutputRoot 'index.html'
$links = foreach ($file in $exportedFiles) {
    $target = Join-Path $script:OutputRoot $file
    $href = Get-RelativeUrl -FromFile $indexFile -ToPath $target
    $label = [System.Net.WebUtility]::HtmlEncode($file.Replace('\', '/'))
    "        <li><a href=`"$href`">$label</a></li>"
}
$indexContent = @"
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Static HTML template export</title>
    <link rel="stylesheet" href="../assets/css/base.css">
</head>
<body>
    <main>
        <h1>Static HTML template export</h1>
        <p>These files are previews. Replace visible template-data placeholders with the corresponding live site content.</p>
        <p>Local styles and media are in the root assets folder. The copied LiveReload script is development-only and is not loaded by these static pages.</p>
        <ul>
$($links -join "`r`n")
        </ul>
    </main>
</body>
</html>
"@
[System.IO.File]::WriteAllText($indexFile, $indexContent, $script:Utf8NoBom)

Write-Output "Exported $($templateFiles.Count) templates to $script:OutputRoot"
