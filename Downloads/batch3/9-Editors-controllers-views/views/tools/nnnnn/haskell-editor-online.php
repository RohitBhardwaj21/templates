<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 <title>Haskell Editor Online – Edit and Run Haskell Code Instantly</title>
<meta name="description" content="Edit, write, and run Haskell code online with ease. Free online Haskell editor tool for instant code editing, execution, and testing.">
<meta property="og:title" content="Haskell Editor Online – Edit and Run Haskell Code">
<meta property="og:description" content="Edit, write, and run Haskell code online with ease. Free online Haskell editor tool for instant code editing, execution, and testing.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://easyshiksha.com/programming-editors/haskell-editor-online">
<meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Haskell Editor Online – Edit and Run Haskell Code">
<meta name="twitter:description" content="Edit, write, and run Haskell code online with ease. Free online Haskell editor tool for instant code editing, execution, and testing.">
<meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">


    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">

  <style>
    .container-haskell-editor {
      margin: 0;
      font-family: sans-serif;
      background: #fffcf5;
      color: #fff;
      min-height: 100vh;
      box-sizing: border-box;
    }
    .container-haskell-editor .toolbar {
      background: #464438;
      padding: 6px 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
    }
    .container-haskell-editor .toolbar .left,
    .container-haskell-editor .toolbar .right {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .container-haskell-editor .toolbar input {
      background: #222;
      border: 1px solid #444;
      color: #fff;
      padding: 4px;
      min-width: 120px;
      max-width: 200px;
      width: 100%;
      box-sizing: border-box;
    }
    .container-haskell-editor .toolbar button {
      background: #de9406;
      border: none;
      color: #fff;
      padding: 5px 10px;
      margin-left: 5px;
      cursor: pointer;
      border-radius: 4px;
      min-width: 90px;
      font-size: 1em;
      transition: background 0.2s;
    }
    .container-haskell-editor .toolbar button:hover {
      background: #b47706;
    }
    .container-haskell-editor #container {
      width: 100%;
      height: calc(100vh - 56px);
      min-height: 300px;
    }
    .flash {
      position: fixed;
      bottom: 20%;
      right: 50%;
      background: #de9406;
      color: #fff;
      padding: 8px 12px;
      border-radius: 4px;
      opacity: 0.9;
      z-index: 999;
      transform: translateX(50%);
      font-size: 1em;
      max-width: 90vw;
      text-align: center;
      word-break: break-word;
    }
    @media (max-width: 700px) {
      .container-haskell-editor .toolbar {
        flex-direction: column;
        align-items: stretch;
        padding: 8px 4px;
      }
      .container-haskell-editor .toolbar .left,
      .container-haskell-editor .toolbar .right {
        flex-direction: row;
        justify-content: flex-start;
        gap: 6px;
        margin-bottom: 4px;
      }
      .container-haskell-editor #container {
        height: calc(100vh - 110px);
        min-height: 200px;
      }
      .container-haskell-editor .toolbar button {
        min-width: 70px;
        font-size: 0.95em;
        margin-left: 0;
      }
      .container-haskell-editor .toolbar input {
        min-width: 80px;
        max-width: 120px;
        font-size: 0.95em;
      }
    }
    @media (max-width: 400px) {
      .container-haskell-editor .toolbar {
        padding: 4px 2px;
      }
      .container-haskell-editor #container {
        height: calc(100vh - 130px);
        min-height: 120px;
      }
      .flash {
        font-size: 0.9em;
        padding: 6px 8px;
      }
    }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.34.1/min/vs/loader.min.js"></script>
</head>

<body>

    <div class="container tools-parent-container mb-5">
        <div class="tools-module-breadcrumb">
            <a href="<?= base_url() ?>">
                <svg class="breadcrumb-home-icon" width="64px" height="64px" viewBox="-1 0 19 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#de9406" stroke="#de9406">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>home [#1393]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-341.000000, -720.000000)" fill="#de9406">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M299.875,576.21213 C299.875,576.76413 299.399,577.00013 298.8125,577.00013 L297.75,577.00013 C297.1635,577.00013 296.6875,576.76413 296.6875,576.21213 L296.6875,575.21213 C296.6875,574.10713 295.736562,573.00013 294.5625,573.00013 L292.4375,573.00013 C291.263438,573.00013 290.3125,574.10713 290.3125,575.21213 L290.3125,576.21213 C290.3125,576.76413 289.8365,577.00013 289.25,577.00013 L288.1875,577.00013 C287.601,577.00013 287.125,576.76413 287.125,576.21213 L287.125,568.14913 C287.125,568.01613 287.181312,567.88913 287.280125,567.79513 L292.738188,562.65913 C293.153625,562.26813 293.826188,562.26813 294.240563,562.65913 L299.719875,567.81513 C299.818688,567.90913 299.875,568.03613 299.875,568.16813 L299.875,576.21213 Z M302,567.62513 C302,567.36013 301.888438,567.10713 301.690812,566.91913 L294.998125,560.58913 C294.169375,559.80613 292.823188,559.80313 291.99125,560.58313 L285.312375,566.84813 C285.112625,567.03613 285,567.29013 285,567.55613 L285,577.21213 C285,578.31713 285.950938,579.00013 287.125,579.00013 L290.3125,579.00013 C291.486562,579.00013 292.4375,578.31713 292.4375,577.21213 L292.4375,576.21213 C292.4375,575.66013 292.9135,575.21213 293.5,575.21213 C294.0865,575.21213 294.5625,575.66013 294.5625,576.21213 L294.5625,577.21213 C294.5625,578.31713 295.513438,579.00013 296.6875,579.00013 L299.875,579.00013 C301.049062,579.00013 302,578.31713 302,577.21213 L302,567.62513 Z" id="home-[#1393]"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <span class="chevron"></span>
            <a href="<?= base_url() ?>programming-editors">Programming Editors</a>
            <span class="chevron"></span>

            <span>Haskell Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Haskell Editor Online
        </h1>
        


         <div class="container-haskell-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="Main.hs" spellcheck="false" />
    </div>
    <div class="right">
      <button id="btn-full">⛶ Fullscreen</button>
      <button id="btn-copy">📋 Copy</button>
      <button id="btn-save">💾 Save</button>
    </div>
  </header>
  <div id="container"></div>
</div>


    </div>

  <script>
    require.config({ paths: { 'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.34.1/min/vs' }});
    require(['vs/editor/editor.main'], function () {
      // Register Haskell language (basic)
      monaco.languages.register({ id: 'haskell' });

      // Provide IntelliSense (snippets + functions)
      monaco.languages.registerCompletionItemProvider('haskell', {
        provideCompletionItems: () => {
          return {
            suggestions: [
              {
                label: "print",
                kind: monaco.languages.CompletionItemKind.Function,
                insertText: 'print "${1:Hello World}"',
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "Print to console"
              },
              {
                label: "function",
                kind: monaco.languages.CompletionItemKind.Function,
                insertText: "myFunc x = x + 1",
                documentation: "Simple function example"
              },
              {
                label: "if-else",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "if ${1:condition} then ${2:result1} else ${3:result2}",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "If-Else expression"
              },
              {
                label: "list-comp",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "[ x*2 | x <- [1..10], even x ]",
                documentation: "List comprehension example"
              },
              {
                label: "data-type",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "data Person = Person { name :: String, age :: Int }",
                documentation: "Custom data type"
              },
              {
                label: "main",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "main = do\n  print \"Hello, Haskell!\"",
                documentation: "Main function"
              }
            ]
          };
        }
      });

      // Create Editor
      const editor = monaco.editor.create(document.getElementById('container'), {
        value: [
          "-- Haskell Example",
          "main = do",
          "  print \"Hello, World!\"",
          "",
          "-- Try typing: print, function, if-else, list-comp, data-type"
        ].join("\n"),
        language: 'haskell',
        theme: 'vs-dark',
        automaticLayout: true,
      });

      // Flash message
      function flash(msg) {
        const div = document.createElement("div");
        div.className = "flash";
        div.textContent = msg;
        document.body.appendChild(div);
        setTimeout(() => div.remove(), 2000);
      }

      // Copy
      document.getElementById('btn-copy').onclick = () => {
        navigator.clipboard.writeText(editor.getValue());
        flash("Copied to clipboard!");
      };

      // Save
      document.getElementById('btn-save').onclick = () => {
        const blob = new Blob([editor.getValue()], { type: 'text/plain' });
        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = document.getElementById('filename').value || 'Main.hs';
        a.click();
        flash("File saved!");
      };

      // Fullscreen
      document.getElementById('btn-full').onclick = () => {
        const container = document.getElementById('container');
        if (!document.fullscreenElement) {
          container.requestFullscreen();
        } else {
          document.exitFullscreen();
        }
      };
    });
  </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>