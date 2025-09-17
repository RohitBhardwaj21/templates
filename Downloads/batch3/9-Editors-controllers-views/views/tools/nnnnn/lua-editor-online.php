<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Lua Editor Online -->
    <title>Lua Editor Online – Write, Edit & Run Lua Code Instantly</title>
    <meta name="description" content="Edit, write, and run Lua code online with our free Lua editor. Test Lua scripts instantly in your browser.">
    <meta property="og:title" content="Lua Editor Online – Write, Edit & Run Lua Code Instantly">
    <meta property="og:description" content="Edit, write, and run Lua code online with our free Lua editor. Test Lua scripts instantly in your browser.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors-compilers/lua-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lua Editor Online – Write, Edit & Run Lua Code Instantly">
    <meta name="twitter:description" content="Edit, write, and run Lua code online with our free Lua editor. Test Lua scripts instantly in your browser.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">

      <style>
    .container-lua-editor {
      margin: 0;
      padding: 0;
      height: 100vh;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background: #1e1e1e;
      color: #e6e6e6;
      font-family: sans-serif;
    }
    .container-lua-editor header.toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #2d2d2d;
      padding: 6px 12px;
      border-bottom: 1px solid #9e6907;
      flex-wrap: wrap;
    }
    .container-lua-editor header.toolbar .left,
    .container-lua-editor header.toolbar .right {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
    }
    .container-lua-editor header.toolbar label {
      color: #de9406;
      font-weight: bold;
    }
    .container-lua-editor header.toolbar input {
      background: #1e1e1e;
      color: #e6e6e6;
      border: 1px solid #9e6907;
      padding: 4px 8px;
      border-radius: 4px;
      width: 180px;
      max-width: 100%;
      box-sizing: border-box;
    }
    .container-lua-editor header.toolbar button {
      background: #de9406;
      color: #fff;
      border: 1px solid #9e6907;
      padding: 4px 10px;
      margin-left: 5px;
      border-radius: 4px;
      cursor: pointer;
      white-space: nowrap;
      transition: background 0.2s, color 0.2s;
    }
    .container-lua-editor header.toolbar button:hover {
      filter: brightness(1.1);
    }
    .container-lua-editor #editor {
      flex: 1;
      min-height: 0;
    }
    @media (max-width: 600px) {
      .container-lua-editor header.toolbar {
        flex-direction: column;
        align-items: stretch;
        padding: 8px 4px;
      }
      .container-lua-editor header.toolbar .left,
      .container-lua-editor header.toolbar .right {
        justify-content: flex-start;
        margin-bottom: 6px;
        gap: 6px;
      }
      .container-lua-editor header.toolbar input {
        width: 100%;
      }
      .container-lua-editor header.toolbar button {
        margin-left: 0;
        width: 100%;
      }
    }
  </style>
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
            <a href="<?= base_url() ?>programming-editors-compilers">Programming Editors and Compilers</a>
            <span class="chevron"></span>

            <span>Lua Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Lua Editor Online 
        </h1>
        


         <div class="container-lua-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="script.lua" spellcheck="false" />
    </div>
    <div class="right">
      <button id="btn-full">⛶ Fullscreen</button>
      <button id="btn-copy">📋 Copy</button>
      <button id="btn-save">💾 Save</button>
    </div>
  </header>
  <div id="editor"></div>
 </div>



    </div>



      <script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.43.0/min/vs/loader.js"></script>
  <script>
    require.config({ paths: { vs: "https://cdn.jsdelivr.net/npm/monaco-editor@0.43.0/min/vs" } });
    require(["vs/editor/editor.main"], function () {
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "-- Lua Sample Script",
          "function greet(name)",
          "  print('Hello ' .. name)",
          "end",
          "",
          "greet('World')",
          "",
          "-- Try typing: for , if , while"
        ].join("\n"),
        language: "lua",
        theme: "vs-dark",
        automaticLayout: true,
      });


// ✅ Custom IntelliSense provider for Lua
  monaco.languages.registerCompletionItemProvider("lua", {
    provideCompletionItems: () => {
      const suggestions = [
        {
          label: "print",
          kind: monaco.languages.CompletionItemKind.Function,
          insertText: 'print("$1")',
          insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
          documentation: "Prints text to console"
        },
        {
          label: "for-loop",
          kind: monaco.languages.CompletionItemKind.Snippet,
          insertText: [
            "for i=1,10 do",
            "  print(i)",
            "end"
          ].join("\n"),
          documentation: "Basic for loop"
        },
        {
          label: "if-else",
          kind: monaco.languages.CompletionItemKind.Snippet,
          insertText: [
            "if condition then",
            "  -- code",
            "else",
            "  -- code",
            "end"
          ].join("\n"),
          documentation: "If else statement"
        }
      ];
      return { suggestions };
    }
  });

      // Copy
      document.getElementById("btn-copy").onclick = () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Copied!"));
      };

      // Save
      document.getElementById("btn-save").onclick = () => {
        const filename = document.getElementById("filename").value || "script.lua";
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = filename;
        a.click();
        URL.revokeObjectURL(url);
        flash("Saved!");
      };

      // Fullscreen toggle
      document.getElementById("btn-full").onclick = () => {
        if (!document.fullscreenElement) {
          document.documentElement.requestFullscreen();
        } else {
          document.exitFullscreen();
        }
      };

      // Toast helper
      function flash(msg) {
        const n = document.createElement("div");
        n.textContent = msg;
        n.style.position = "fixed";
        n.style.bottom = "16px";
        n.style.left = "50%";
        n.style.transform = "translateX(-50%)";
        n.style.background = "#1a1d29";
        n.style.color = "#e6e6e6";
        n.style.border = "1px solid #2a2f45";
        n.style.padding = "6px 12px";
        n.style.borderRadius = "6px";
        n.style.zIndex = "100000";
        document.body.appendChild(n);
        setTimeout(() => n.remove(), 1000);
      }
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>