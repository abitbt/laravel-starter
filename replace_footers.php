<?php

/**
 * Script to replace footer sections in sample files with @include('samples.includes.footer')
 *
 * This script finds footer blocks that match the pattern and replaces them with the include statement.
 */
$samplesDir = __DIR__.'/resources/views/samples';
$excludeFiles = ['includes/footer.blade.php']; // Don't process the footer include file itself

// Get all .blade.php files in the samples directory
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($samplesDir)
);

$processedFiles = 0;
$replacedFiles = 0;

foreach ($files as $file) {
    if ($file->isFile() && $file->getExtension() === 'php') {
        $relativePath = str_replace($samplesDir.'/', '', $file->getPathname());

        // Skip the footer include file itself
        if (in_array($relativePath, $excludeFiles)) {
            continue;
        }

        $processedFiles++;
        $content = file_get_contents($file->getPathname());
        $originalContent = $content;

        // Pattern to match footer blocks with comments
        // This matches from <!-- BEGIN FOOTER --> to <!-- END FOOTER -->
        $pattern = '/<!--\s*BEGIN\s+FOOTER\s*-->\s*<!--\s*BEGIN\s+FOOTER\s*-->\s*<footer[^>]*>.*?<\/footer>\s*<!--\s*END\s+FOOTER\s*-->\s*<!--\s*END\s+FOOTER\s*-->/s';

        // Alternative pattern for simpler footer blocks
        $simplePattern = '/<footer[^>]*>.*?<\/footer>/s';

        $replacement = "@include('samples.includes.footer')";

        // Try the complex pattern first (with comments)
        if (preg_match($pattern, $content)) {
            $content = preg_replace($pattern, $replacement, $content);
            echo "✓ Replaced complex footer in: {$relativePath}\n";
            $replacedFiles++;
        }
        // Then try the simple pattern
        elseif (preg_match($simplePattern, $content)) {
            $content = preg_replace($simplePattern, $replacement, $content);
            echo "✓ Replaced simple footer in: {$relativePath}\n";
            $replacedFiles++;
        }

        // Write the file if content changed
        if ($content !== $originalContent) {
            file_put_contents($file->getPathname(), $content);
        }
    }
}

echo "\n";
echo "Summary:\n";
echo "- Processed files: {$processedFiles}\n";
echo "- Files with footer replacements: {$replacedFiles}\n";
echo "- Script completed successfully!\n";
