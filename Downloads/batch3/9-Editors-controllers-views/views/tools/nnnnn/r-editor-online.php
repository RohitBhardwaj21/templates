<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>R Editor Online – Edit and Run R Code Instantly</title>
    <meta name="description" content="Edit, write, and run R code online with ease. Free online R editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="R Editor Online – Edit and Run R Code">
    <meta property="og:description" content="Edit, write, and run R code online with ease. Free online R editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/r-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="R Editor Online – Edit and Run R Code">
    <meta name="twitter:description" content="Edit, write, and run R code online with ease. Free online R editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">

      <style>
    :root{--bg:#1e1e1e;--toolbar:#3b3528;--fg:#e0e0e0;--btn:#de9406;--border: #6b5e42 }
    .container-r-editor {min-height:100vh ;margin:0;background:var(--bg);color:var(--fg);font-family:system-ui,Segoe UI,Roboto,Arial}
    .container-r-editor .toolbar{display:flex;justify-content:space-between;align-items:center;padding:6px 10px;background:var(--toolbar);border-bottom:1px solid var(--border)}
    .container-r-editor .toolbar .left{display:flex;align-items:center;gap:8px}
    .container-r-editor .toolbar input{background:#1b1b1b;border:1px solid var(--border);color:var(--fg);padding:4px 8px;border-radius:6px;width:180px}
    .container-r-editor .toolbar button{background:var(--btn);border:1px solid var(--border);color:var(--fg);padding:6px 10px;border-radius:6px;cursor:pointer}
    .container-r-editor .toolbar button:hover{filter:brightness(1.15)}
    .container-r-editor #editor{height:calc(100vh - 44px);width:100%}
    @media (max-width: 663px) {
      .container-r-editor .toolbar{
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
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
            <a href="<?= base_url() ?>programming-editors-compilers">Programming Editors and Compilers</a>
            <span class="chevron"></span>

            <span>R Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            R Editor Online
        </h1>
        

  <div class="container-r-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="script.R" spellcheck="false" />
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
    // Toast helper
    function flash(msg) {
      const n = document.createElement("div");
      n.textContent = msg;
      n.style.position = "fixed";
      n.style.bottom = "16px";
      n.style.left = "50%";
      n.style.transform = "translateX(-50%)";
      n.style.background = "#de9406";
      n.style.color = "#fff";
      n.style.border = "1px solid #2a2f45";
      n.style.padding = "8px 12px";
      n.style.borderRadius = "8px";
      n.style.zIndex = "100000";
      document.body.appendChild(n);
      setTimeout(() => n.remove(), 1100);
    }

    require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "# R Script Example",
          "sayHello <- function(name) {",
          "  print(paste('Hello', name))",
          "}",
          "",
          "sayHello('World')",
          "",
          "# Try typing: print , function , for-loop , if-else , data.frame , ggplot"
        ].join("\n"),
        language: "r",
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 14,
        lineHeight: 22
      });

      // ---- Custom IntelliSense (snippets + functions) for R ----
      monaco.languages.registerCompletionItemProvider("r", {
        // optional trigger characters to pop suggestions while typing
        triggerCharacters: ['.', '(', '"', "'", '[', ' '],
        provideCompletionItems: () => {
          const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
          const K = monaco.languages.CompletionItemKind;

          const suggestions = [
            // print()
            {
              label: "print",
              kind: K.Function,
              insertTextRules: R,
              insertText: 'print("$1")',
              documentation: "Prints a value to the console"
            },
            // function template
            {
              label: "function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "${1:my_function} <- function(${2:x}) {",
                "  ${3:print(${2:x})}",
                "}"
              ].join("\n"),
              documentation: "Function template"
            },
            // for-loop
            {
              label: "for-loop",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "for (${1:i} in ${2:1:10}) {",
                "  ${3:print(${1:i})}",
                "}"
              ].join("\n"),
              documentation: "Basic for loop"
            },
            // if-else
            {
              label: "if-else",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "if (${1:condition}) {",
                "  ${2:# code when TRUE}",
                "} else {",
                "  ${3:# code when FALSE}",
                "}"
              ].join("\n"),
              documentation: "If / else statement"
            },
            // data.frame
            {
              label: "data.frame",
              kind: K.Function,
              insertText: 'data.frame(${1:col1} = c(${2:1,2,3}), ${3:col2} = c("${4:A}","${5:B}","${6:C}"))',
              insertTextRules: R,
              documentation: "Create a simple data frame"
            },
            // ggplot
            {
              label: "ggplot",
              kind: K.Function,
              insertTextRules: R,
              insertText: [
                "library(ggplot2)",
                "${1:df} <- data.frame(${2:x}=1:10, ${3:y}=(${2:x})^2)",
                "ggplot(${1:df}, aes(${2:x}, ${3:y})) +",
                "  geom_point() +",
                "  theme_minimal()"
              ].join("\n"),
              documentation: "Basic ggplot2 scatter plot"
            }
          ];
          return { suggestions };
        }
      });

      // ---- Toolbar actions ----
      document.getElementById("btn-copy").onclick = () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Code copied!"));
      };

      document.getElementById("btn-save").onclick = () => {
        const name = (document.getElementById("filename").value || "script.R").trim();
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url; a.download = name; a.click();
        URL.revokeObjectURL(url);
        flash("File saved!");
      };

      document.getElementById("btn-full").onclick = () => {
        if (!document.fullscreenElement) {
          document.documentElement.requestFullscreen?.();
        } else {
          document.exitFullscreen?.();
        }
      };

      // Ctrl/Cmd+S -> Save
      window.addEventListener("keydown", (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === "s") {
          e.preventDefault();
          document.getElementById("btn-save").click();
        }
      });
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>