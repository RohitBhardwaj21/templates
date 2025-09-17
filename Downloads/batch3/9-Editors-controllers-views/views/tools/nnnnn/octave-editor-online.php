
<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    
    <title>Octave Editor Online – Edit and Run Octave Code Instantly</title>
    <meta name="description" content="Edit, write, and run Octave code online with ease. Free online Octave editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="Octave Editor Online – Edit and Run Octave Code">
    <meta property="og:description" content="Edit, write, and run Octave code online with ease. Free online Octave editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/octave-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Octave Editor Online – Edit and Run Octave Code">
    <meta name="twitter:description" content="Edit, write, and run Octave code online with ease. Free online Octave editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">

      <style>
    :root {
      --bg: #1e1e1e;
      --toolbar: #23201a;
      --fg: #e6e6e6;
      --btn: #de9406;
      --border: #444;
      --accent: #de9406;
    }
    .container-octave-editor {
      height: 100%;
      margin: 0;
      background: var(--bg);
      color: var(--fg);
      font-family: system-ui, Segoe UI, Roboto, Arial;
    }
    .container-octave-editor .toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 12px;
      background: var(--toolbar);
      border-bottom: 1px solid var(--border);
      flex-wrap: wrap;
      gap: 8px;
    }
    .container-octave-editor .toolbar .left {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .container-octave-editor .toolbar label {
      font-size: 13px;
      color: var(--accent);
      font-weight: 500;
    }
    .container-octave-editor .toolbar input[type="text"] {
      background: #131318;
      color: var(--fg);
      border: 1px solid var(--border);
      padding: 6px 8px;
      border-radius: 6px;
      width: 220px;
      max-width: 100%;
      transition: border-color 0.2s;
    }
    .container-octave-editor .toolbar input[type="text"]:focus {
      border-color: var(--accent);
      outline: none;
    }
    .container-octave-editor .toolbar .right {
      display: flex;
      gap: 8px;
      align-items: center;
      flex-wrap: wrap;
    }
    .container-octave-editor .toolbar button {
      background: var(--btn);
      color: var(--fg);
      border: 1px solid var(--border);
      padding: 6px 10px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.2s, border-color 0.2s, color 0.2s;
      font-weight: 500;
    }
    .container-octave-editor .toolbar button:hover,
    .container-octave-editor .toolbar button:focus {
      background: var(--accent);
      /* color: #23201a; */
      border-color: var(--accent);
      outline: none;
      filter: brightness(1.1)

    }
    .container-octave-editor #editor {
      height: calc(100vh - 52px);
      width: 100%;
      min-height: 300px;
    }
    .toast {
      position: fixed;
      bottom: 20%;
      left: 50%;
      transform: translateX(-50%);
      background: #de9406;
      color: #e6eef8;
      border: 1px solid #453e2a;
      padding: 8px 12px;
      border-radius: 8px;
      z-index: 99999;
      box-shadow: 0 8px 24px rgba(0,0,0,0.6);
      font-size: 15px;
      border-left: 4px solid var(--accent);
    }
    @media (max-width: 700px) {
      .container-octave-editor .toolbar {
        flex-direction: column;
        align-items: stretch;
        padding: 8px 6px;
      }
      .container-octave-editor .toolbar .left,
      .container-octave-editor .toolbar .right {
        flex-direction: row;
        justify-content: flex-start;
        gap: 6px;
        margin-bottom: 4px;
      }
      .container-octave-editor .toolbar input[type="text"] {
        width: 100%;
        min-width: 0;
      }
      .container-octave-editor #editor {
        height: calc(100vh - 110px);
        min-height: 180px;
      }
    }
    @media (max-width: 420px) {
      .container-octave-editor .toolbar label {
        font-size: 12px;
      }
      .container-octave-editor .toolbar button {
        padding: 5px 7px;
        font-size: 13px;
      }
      .container-octave-editor .toast {
        font-size: 13px;
        padding: 6px 8px;
      }
    }
  </style>

  <!-- Monaco loader -->
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
            <a href="<?= base_url() ?>programming-editors-compilers">Programming Editors and Compilers</a>
            <span class="chevron"></span>

            <span>Octave Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Octave Editor Online
        </h1>
        

         <div class="container-octave-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="script.m" spellcheck="false" />
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
    // toast helper
    function flash(msg){
      const n = document.createElement("div");
      n.className = "toast";
      n.textContent = msg;
      document.body.appendChild(n);
      setTimeout(()=> n.remove(), 1200);
    }

    // Monaco config
    require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {

      // register matlab/octave language
      try {
        monaco.languages.register({ id: "matlab" });
      } catch(e){ /* already registered */ }

      // basic monarch tokenizer for matlab/octave
      monaco.languages.setMonarchTokensProvider("matlab", {
        defaultToken: '',
        tokenPostfix: '.m',
        keywords: [
          'function','end','for','while','if','else','elseif','switch','case','otherwise',
          'break','continue','return','global','persistent'
        ],
        operators: [
          '+','-','*','/','\\','^','==','~=','<','>','<=','>=','=',':'
        ],
        symbols: /[=+\-*/\\^<>~:]+/,
        tokenizer: {
          root: [
            [/%.*$/, 'comment'],
            [/[a-zA-Z_]\w*/, {
              cases: {
                '@keywords': 'keyword',
                '@default': 'identifier'
              }
            }],
            [/\d+\.\d+([eE][-+]?\d+)?/, 'number.float'],
            [/\d+/, 'number'],
            [/".*?"/, 'string'],
            [/'.*?'/, 'string'],
            [/[()\[\],;]/, 'delimiter'],
            [/@symbols/, 'operator']
          ]
        }
      });

      // create editor
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "% MATLAB / Octave sample",
          "function y = myFunc(x)",
          "    % returns squared values",
          "    y = x.^2;",
          "end",
          "",
          "% Try typing: function, for, if, plot, disp, matrix"
        ].join("\n"),
        language: "matlab",
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 13,
        lineHeight: 20
      });

      // completion/snippets provider
      monaco.languages.registerCompletionItemProvider("matlab", {
        triggerCharacters: ['.', '(', '[', ' ', ';', '%', ','],
        provideCompletionItems: () => {
          const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
          const K = monaco.languages.CompletionItemKind;

          const suggestions = [
            {
              label: "disp",
              kind: K.Function,
              insertTextRules: R,
              insertText: 'disp("${1:message}")',
              documentation: "Display text or variable"
            },
            {
              label: "function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "function [${1:out}] = ${2:myFunction}(${3:in})",
                "    ${4:% code here}",
                "end"
              ].join("\n"),
              documentation: "Define a function"
            },
            {
              label: "for-loop",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "for ${1:i} = ${2:1}:${3:10}",
                "    ${4:disp(${1})}",
                "end"
              ].join("\n"),
              documentation: "For loop"
            },
            {
              label: "if-else",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "if ${1:condition}",
                "    ${2:% true branch}",
                "else",
                "    ${3:% false branch}",
                "end"
              ].join("\n"),
              documentation: "If / else statement"
            },
            {
              label: "while-loop",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "while ${1:condition}",
                "    ${2:% code here}",
                "end"
              ].join("\n"),
              documentation: "While loop"
            },
            {
              label: "matrix",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: "[${1:1} ${2:2}; ${3:3} ${4:4}]",
              documentation: "Matrix definition"
            },
            {
              label: "plot",
              kind: K.Function,
              insertTextRules: R,
              insertText: [
                "x = ${1:1}:0.1:${2:10};",
                "y = sin(x);",
                "plot(x,y);",
                "title('${3:My Plot}');",
                "xlabel('${4:X}');",
                "ylabel('${5:Y}');"
              ].join("\n"),
              documentation: "Basic plot example"
            },
            {
              label: "zeros",
              kind: K.Function,
              insertTextRules: R,
              insertText: "zeros(${1:rows}, ${2:cols})",
              documentation: "Create zeros matrix"
            },
            {
              label: "ones",
              kind: K.Function,
              insertTextRules: R,
              insertText: "ones(${1:rows}, ${2:cols})",
              documentation: "Create ones matrix"
            },
            {
              label: "eye",
              kind: K.Function,
              insertTextRules: R,
              insertText: "eye(${1:n})",
              documentation: "Identity matrix"
            },
            {
              label: "comment",
              kind: K.Keyword,
              insertTextRules: R,
              insertText: "% ${1:comment}",
              documentation: "Line comment"
            }
          ];

          return { suggestions };
        }
      });

      // toolbar actions
      document.getElementById("btn-copy").addEventListener("click", () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Copied to clipboard"));
      });

      document.getElementById("btn-save").addEventListener("click", () => {
        const fname = (document.getElementById("filename").value || "script.m").trim();
        const safeName = fname.includes('.') ? fname : fname + ".m";
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = safeName;
        a.style.display = "none";
        document.body.appendChild(a);
        a.click();
        URL.revokeObjectURL(a.href);
        a.remove();
        flash("Saved " + safeName);
      });

      document.getElementById("btn-full").addEventListener("click", () => {
        const node = document.getElementById("editor");
        if (!document.fullscreenElement) node.requestFullscreen?.();
        else document.exitFullscreen?.();
      });

      // Ctrl/Cmd+S save
      window.addEventListener("keydown", (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === "s") {
          e.preventDefault();
          document.getElementById("btn-save").click();
        }
      });

      flash("MATLAB/Octave Editor ready");
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>