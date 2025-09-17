<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>F# Editor Online – Edit and Run F# Code Instantly</title>
    <meta name="description" content="Edit, write, and run F# code online with ease. Free online F# editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="F# Editor Online – Edit and Run F# Code">
    <meta property="og:description" content="Edit, write, and run F# code online with ease. Free online F# editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/fsharp-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="F# Editor Online – Edit and Run F# Code">
    <meta name="twitter:description" content="Edit, write, and run F# code online with ease. Free online F# editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">
  <style>
    :root{
      --bg:#1e1e1e; --toolbar:#46401f; --fg:#fffefc; --btn:#de9406; --border:#444;
    }
    .container-fsharp-editor {height:100%;margin:0;background:var(--bg);color:var(--fg);font-family:system-ui,Segoe UI,Roboto,Arial}
    .container-fsharp-editor .toolbar{
      display:flex;justify-content:space-between;align-items:center;padding:8px 12px;background:var(--toolbar);border-bottom:1px solid var(--border);
      flex-wrap:wrap;
    }
    .container-fsharp-editor .toolbar .left{display:flex;align-items:center;gap:8px;flex-wrap:wrap;}
    .container-fsharp-editor .toolbar label{font-size:13px}
    .container-fsharp-editor .toolbar input[type="text"]{
      background:#181713;color:var(--fg);border:1px solid var(--border);padding:6px 8px;border-radius:6px;width:220px;max-width:100%;
      box-sizing:border-box;
    }
    .container-fsharp-editor .toolbar .right{display:flex;gap:8px;align-items:center;flex-wrap:wrap;}
    .container-fsharp-editor .toolbar button{
      background:var(--btn);color:var(--fg);border:1px solid var(--border);padding:6px 10px;border-radius:6px;cursor:pointer;
      min-width:90px;
    }
    .container-fsharp-editor .toolbar button:hover{filter:brightness(1.08)}
    .container-fsharp-editor #editor{height:calc(100vh - 52px);width:100%}
    .container-fsharp-editor .toast{
      position:fixed;bottom:18px;left:50%;transform:translateX(-50%);
      background:#29241a;color:#e6eef8;border:1px solid #453e2a;padding:8px 12px;border-radius:8px;z-index:999;
      box-shadow:0 8px 24px rgba(0,0,0,0.6);
    }

    @media (max-width: 700px) {
      .container-fsharp-editor .toolbar {
        flex-direction:column;
        align-items:flex-start;
        gap:8px;
        padding:8px 6px;
      }
      .container-fsharp-editor .toolbar .left,
      .container-fsharp-editor .toolbar .right {
        width:100%;
        justify-content:flex-start;
        gap:6px;
      }
      .container-fsharp-editor .toolbar input[type="text"] {
        width:100%;
      }
      .container-fsharp-editor #editor {
        height:calc(100vh - 110px);
      }
    }

    @media (max-width: 450px) {
      .container-fsharp-editor .toolbar button {
        min-width:70px;
        padding:6px 6px;
        font-size:13px;
      }
      .container-fsharp-editor .toolbar label {
        font-size:12px;
      }
      .container-fsharp-editor #editor {
        height:calc(100vh - 130px);
      }
    }
  </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs/loader.min.js"></script>
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

            <span>F# Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            F# Editor Online
        </h1>
        

          <div class="container-fsharp-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="Program.fs" spellcheck="false" />
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



      <script>
    // Toast helper (exact as you requested)
    function flash(msg) {
      const n = document.createElement("div");
      n.textContent = msg;
      n.style.position = "fixed";
      n.style.bottom = "16px";
      n.style.left = "50%";
      n.style.transform = "translateX(-50%)";
      n.style.background = "#d18a07";
      n.style.color = "#e6e6e6";
      n.style.border = "1px solid #2a2f45";
      n.style.padding = "6px 12px";
      n.style.borderRadius = "6px";
      n.style.zIndex = "100000";
      document.body.appendChild(n);
      setTimeout(() => n.remove(), 1000);
    }

    // Monaco config & editor init
    require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {

      // Register minimal fsharp language (for highlighting)
      try { monaco.languages.register({ id: "fsharp" }); } catch(e){}

      monaco.languages.setMonarchTokensProvider("fsharp", {
        defaultToken: '',
        tokenPostfix: '.fs',
        keywords: [
          'let','rec','in','module','open','type','match','with','when','if','then','else',
          'for','to','do','done','while','yield','use','function','fun','mutable','override',
          'abstract','class','inherit','new','static'
        ],
        operators: [
          '=', '>', '<', '>=', '<=', '<>', '::', ':', '|', '||', '&&', '+', '-', '*', '/', '%', '^', '->', '<-'
        ],
        symbols: /[=><!~?:&|+\-*\/\^%]+/,
        tokenizer: {
          root: [
            [/%.*$/, 'comment'],
            [/\/\/.*$/, 'comment'],
            [/[A-Z][\w']*/, 'type.identifier'],
            [/[a-zA-Z_][\w']*/, {
              cases: {
                '@keywords': 'keyword',
                '@default': 'identifier'
              }
            }],
            [/\d+\.\d+([eE][-+]?\d+)?/, 'number.float'],
            [/\d+/, 'number'],
            [/\\"/, 'string.escape'],
            [/"/, 'string', '@string'],
            [/[()\[\]{},;]/, 'delimiter'],
            [/@symbols/, 'operator']
          ],
          string: [
            [/[^\\"]+/, 'string'],
            [/\\./, 'string.escape'],
            [/"/, { token: 'string.quote', next: '@pop' }]
          ]
        }
      });

      // Create the editor
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "// F# sample program",
          "open System",
          "",
          "let square x = x * x",
          "",
          "let rec fact n =",
          "  if n = 0 then 1 else n * fact (n - 1)",
          "",
          "[<EntryPoint>]",
          "let main argv =",
          "  printfn \"Square of 5: %d\" (square 5)",
          "  printfn \"Fact of 5: %d\" (fact 5)",
          "  0"
        ].join("\n"),
        language: "fsharp",
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 13,
        lineHeight: 20
      });

      // Custom IntelliSense / snippets for F#
      monaco.languages.registerCompletionItemProvider("fsharp", {
        triggerCharacters: [' ', '.', '(', '[', '{', '|'],
        provideCompletionItems: () => {
          const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
          const K = monaco.languages.CompletionItemKind;

          const suggestions = [
            {
              label: "printfn",
              kind: K.Function,
              insertTextRules: R,
              insertText: 'printfn "${1:format}" ${2:args}',
              documentation: "Print formatted string with newline"
            },
            {
              label: "let",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "let ${1:name} = ${2:value}",
                "$0"
              ].join("\n"),
              documentation: "Let binding"
            },
            {
              label: "let rec",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "let rec ${1:name} ${2:arg} =",
                "  ${3:(* body *)}",
                "$0"
              ].join("\n"),
              documentation: "Recursive function"
            },
            {
              label: "function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "let ${1:name} ${2:args} =",
                "  ${3:body}"
              ].join("\n"),
              documentation: "Function template"
            },
            {
              label: "for-loop",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "for ${1:i} in ${2:1} .. ${3:10} do",
                "  ${4:printfn \"%d\" ${1:i}}",
                "done"
              ].join("\n"),
              documentation: "For loop"
            },
            {
              label: "if-else",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "if ${1:condition} then",
                "  ${2:expr1}",
                "else",
                "  ${3:expr2}"
              ].join("\n"),
              documentation: "If / else"
            },
            {
              label: "match",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "match ${1:value} with",
                "| ${2:pattern1} -> ${3:expr1}",
                "| ${4:pattern2} -> ${5:expr2}"
              ].join("\n"),
              documentation: "Pattern matching"
            },
            {
              label: "List.map",
              kind: K.Function,
              insertTextRules: R,
              insertText: "List.map (fun ${1:x} -> ${2:expr}) ${3:list}",
              documentation: "Map over list"
            },
            {
              label: "seq expressions",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "seq {",
                "  for ${1:x} in ${2:xs} do",
                "    yield ${3:x}",
                "}"
              ].join("\n"),
              documentation: "Sequence expression"
            }
          ];

          return { suggestions };
        }
      });

      // Buttons behavior

      // Copy
      document.getElementById("btn-copy").addEventListener("click", () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Copied to clipboard"));
      });

      // Save
      document.getElementById("btn-save").addEventListener("click", () => {
        const fname = (document.getElementById("filename").value || "Program.fs").trim();
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = fname;
        a.style.display = "none";
        document.body.appendChild(a);
        a.click();
        URL.revokeObjectURL(a.href);
        a.remove();
        flash("Saved " + fname);
      });

      // Fullscreen
      document.getElementById("btn-full").addEventListener("click", () => {
        const node = document.getElementById("editor");
        if (!document.fullscreenElement) node.requestFullscreen?.();
        else document.exitFullscreen?.();
      });

      // Ctrl/Cmd+S -> Save
      window.addEventListener("keydown", (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === "s") {
          e.preventDefault();
          document.getElementById("btn-save").click();
        }
      });

      // On load: example already present (no example button)
      flash("F# Editor ready");
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>