<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>Lisp Editor Online – Edit and Run Lisp Code Instantly</title>
    <meta name="description" content="Edit, write, and run Lisp code online with ease. Free online Lisp editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="Lisp Editor Online – Edit and Run Lisp Code">
    <meta property="og:description" content="Edit, write, and run Lisp code online with ease. Free online Lisp editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/lisp-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lisp Editor Online – Edit and Run Lisp Code">
    <meta name="twitter:description" content="Edit, write, and run Lisp code online with ease. Free online Lisp editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">

  <style>
    .container-lisp-editor {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      background: #1e1e1e;
      color: #e6e6e6;
      font-family: sans-serif;
    }
    .container-lisp-editor header.toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #46401f;
      padding: 6px 12px;
      border-bottom: 1px solid rgba(255, 241, 210, 0.699);
      gap: 12px;
      flex-wrap: wrap;
    }
    .container-lisp-editor .left,
    .container-lisp-editor .right {
      display: flex;
      align-items: center;
      gap: 8px;
      flex-wrap: wrap;
    }
    .container-lisp-editor header.toolbar input,
    .container-lisp-editor header.toolbar select {
      background: #1e1e1e;
      color: #e6e6e6;
      border: 1px solid #de9406;
      padding: 4px 8px;
      border-radius: 4px;
      min-width: 80px;
      max-width: 100%;
      box-sizing: border-box;
    }
    .container-lisp-editor header.toolbar button {
      background: #de9406;
      color: #fff;
      border: 1px solid #555;
      padding: 4px 10px;
      margin-left: 0;
      border-radius: 4px;
      cursor: pointer;
      white-space: nowrap;
    }
    .container-lisp-editor header.toolbar button:hover { background:#be7e06; }
    .container-lisp-editor #editor {  min-height: 0;height: 90vh; }
    .container-lisp-editor .examples {
      background:#2b2923;
      padding:6px;
      border-radius:6px;
      border:1px solid #45402a;
      color:#ddd;
      min-width: 120px;
      max-width: 100%;
      box-sizing: border-box;
    }

    @media (max-width: 900px) {
      .container-lisp-editor header.toolbar {
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
      }
      .container-lisp-editor .left,
      .container-lisp-editor .right {
        flex-direction: row;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 4px;
      }
    }

    @media (max-width: 600px) {
      .container-lisp-editor header.toolbar {
        padding: 6px 4px;
      }
      .container-lisp-editor .left,
      .container-lisp-editor .right {
        flex-direction: column;
        align-items: stretch;
        gap: 6px;
      }
      .container-lisp-editor header.toolbar input,
      .container-lisp-editor header.toolbar select,
      .container-lisp-editor header.toolbar button {
        font-size: 15px;
        width: 100%;
        min-width: 0;
      }
      .container-lisp-editor .examples {
        min-width: 0;
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
            <a href="<?= base_url() ?>programming-editors">Programming Editors</a>
            <span class="chevron"></span>

            <span>  Lisp Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Lisp Editor Online
        </h1>
        

 <div class="container-lisp-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="main.scm" spellcheck="false" />
      <label for="example-select" style="margin-left:8px;color:#bbb;font-size:13px">Examples:</label>
      <select id="example-select" class="examples" title="Choose example to insert">
        <option value="">— select example —</option>
        <option value="(define (square x)\n  (* x x))">define: square</option>
        <option value="(define (factorial n)\n  (if (= n 0)\n      1\n      (* n (factorial (- n 1)))))">factorial</option>
        <option value="(define (map-dbl lst)\n  (map (lambda (x) (* x 2)) lst))">map with lambda</option>
        <option value="(define (fibonacci n)\n  (if (< n 2) n\n      (+ (fibonacci (- n 1)) (fibonacci (- n 2)))))">fibonacci</option>
        <option value="(let ((x 10) (y 20))\n  (display (+ x y))\n  (newline))">let + display</option>
      </select>
      <button id="btn-insert">Insert</button>
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


  <script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs/loader.js"></script>
  <script>
    // Toast helper (exact code you provided)
    function flash(msg) {
      const n = document.createElement("div");
      n.textContent = msg;
      n.style.position = "fixed";
      n.style.bottom = "10%";
      n.style.left = "50%";
      n.style.transform = "translateX(-50%)";
      n.style.background = "#de9406";
      n.style.color = "#fff";
      n.style.border = "1px solid #453f2aff";
      n.style.padding = "6px 12px";
      n.style.borderRadius = "6px";
      n.style.zIndex = "999";
      document.body.appendChild(n);
      setTimeout(() => n.remove(), 1000);
    }

    require.config({ paths: { vs: "https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {
      // create editor — use clojure mode (best available Lisp-like highlighting)
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          ";; Lisp / Scheme example",
          "(define (square x)",
          "  (* x x))",
          "",
          "(display (square 5))",
          "(newline)",
          ";; Try typing: define, lambda, if, let, map"
        ].join("\n"),
        language: "clojure",
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 13,
        lineHeight: 20
      });

      // Custom IntelliSense / snippets for Lisp/Scheme (using clojure language id)
      monaco.languages.registerCompletionItemProvider("clojure", {
        triggerCharacters: ['(', ' ', '"', "'"],
        provideCompletionItems: () => {
          const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
          const K = monaco.languages.CompletionItemKind;

          const suggestions = [
            {
              label: "print",
              kind: K.Function,
              insertTextRules: R,
              insertText: '(display "${1:Hello World}")$0',
              documentation: "Display string/expr"
            },
            {
              label: "define-function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText:
                ["(define (${1:name} ${2:args})",
                 "  ${3:body})"].join("\n"),
              documentation: "Define a function"
            },
            {
              label: "lambda",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: ["(lambda (${1:args})", "  ${2:body})"].join("\n"),
              documentation: "Anonymous function (lambda)"
            },
            {
              label: "if-else",
              kind: K.Snippet,
              insertTextRules: R,
              insertText:
                ["(if ${1:condition}",
                 "    ${2:true-expr}",
                 "    ${3:false-expr})"].join("\n"),
              documentation: "If expression"
            },
            {
              label: "let",
              kind: K.Snippet,
              insertTextRules: R,
              insertText:
                ["(let ((${1:var} ${2:value}))",
                 "  ${3:body})"].join("\n"),
              documentation: "Let binding"
            },
            {
              label: "cond",
              kind: K.Snippet,
              insertTextRules: R,
              insertText:
                ["(cond",
                 "  (${1:test1} ${2:expr1})",
                 "  (${3:test2} ${4:expr2})",
                 "  (else ${5:exprN}))"].join("\n"),
              documentation: "Cond expression"
            },
            {
              label: "map",
              kind: K.Function,
              insertTextRules: R,
              insertText: "(map (lambda (${1:x}) ${2:expr}) ${3:list})",
              documentation: "Map with lambda"
            }
          ];

          return { suggestions };
        }
      });

      // Insert selected example into editor
      document.getElementById("btn-insert").addEventListener("click", () => {
        const sel = document.getElementById("example-select");
        const code = sel.value;
        if (!code) { flash("Select an example first"); return; }
        const pos = editor.getPosition();
        editor.executeEdits("insert-example", [{ range: new monaco.Range(pos.lineNumber, pos.column, pos.lineNumber, pos.column), text: code + "\n" }]);
        editor.focus();
        flash("Example inserted");
      });

      // Copy
      document.getElementById("btn-copy").addEventListener("click", () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Copied!"));
      });

      // Save
      document.getElementById("btn-save").addEventListener("click", () => {
        const filename = (document.getElementById("filename").value || "main.scm").trim();
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = filename;
        a.click();
        URL.revokeObjectURL(a.href);
        flash("Saved!");
      });

      // Fullscreen toggle
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

      flash("Lisp/Scheme Editor ready");
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>