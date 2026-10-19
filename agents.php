<?php

declare(strict_types=1);

/**
 * Raw, UI-free view of AGENTS.md.
 *
 * Rendered as plain monospace text on purpose: this page exists for agents,
 * crawlers, and curl, not for browsing. AGENTS.md stays the single source.
 */

const AGENTS_DOC_PATH = __DIR__ . '/AGENTS.md';

$markdown = is_readable(AGENTS_DOC_PATH) ? (string) file_get_contents(AGENTS_DOC_PATH) : 'AGENTS.md not found.';
$markdown = rtrim(str_replace(["\r\n", "\r"], "\n", $markdown)) . "\n";

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AGENTS.md — ringkasan portofolio Genesaret Johnes untuk agen AI dan crawler.">
    <link rel="alternate" type="text/markdown" href="AGENTS.md" title="AGENTS.md">
    <link rel="shortcut icon" type="image/png" href="assets/images/preloader.png">
    <title>AGENTS.md | Genesaret Johnes</title>
    <style>
        html {
            background: #131313;
        }

        body {
            margin: 0;
            padding: 32px 24px 64px;
            background: #131313;
            color: #d8d8d8;
            font-family: Consolas, "Cascadia Mono", "Courier New", ui-monospace, monospace;
            font-size: 14px;
            line-height: 1.6;
            tab-size: 2;
        }

        pre {
            margin: 0;
            font: inherit;
            white-space: pre-wrap;
            overflow-wrap: break-word;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 16px 48px;
                font-size: 13px;
            }
        }

        @media print {
            html,
            body {
                background: #fff;
                color: #000;
            }
        }
    </style>
</head>

<body>
    <pre><?= htmlspecialchars($markdown, ENT_QUOTES, 'UTF-8') ?></pre>
</body>

</html>
