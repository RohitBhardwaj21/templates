<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>Julia Editor Online – Edit and Run Julia Code Instantly</title>
    <meta name="description" content="Edit, write, and run Julia code online with ease. Free online Julia editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="Julia Editor Online – Edit and Run Julia Code">
    <meta property="og:description" content="Edit, write, and run Julia code online with ease. Free online Julia editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/julia-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Julia Editor Online – Edit and Run Julia Code">
    <meta name="twitter:description" content="Edit, write, and run Julia code online with ease. Free online Julia editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">
  <style>
    :root{--bg:#1e1e1e;--toolbar:#46401f;--fg:#e0e0e0;--btn:#de9406;--border:#444}
    .container-julia-editor {
      height:100%;
      margin:0;
      background:var(--bg);
      color:var(--fg);
      font-family:system-ui,Segoe UI,Roboto,Arial;
    }
    .container-julia-editor .toolbar {
      display:flex;
      justify-content:space-between;
      align-items:center;
      padding:6px 10px;
      background:var(--toolbar);
      border-bottom:1px solid var(--border);
      flex-wrap:wrap;
      gap:8px;
    }
    .container-julia-editor .toolbar .left {
      display:flex;
      align-items:center;
      gap:8px;
      flex-wrap:wrap;
    }
    .container-julia-editor .toolbar input {
      background:#1b1b1b;
      border:1px solid var(--border);
      color:var(--fg);
      padding:4px 8px;
      border-radius:6px;
      width:180px;
      min-width:120px;
      max-width:100%;
      box-sizing:border-box;
    }
    .container-julia-editor .toolbar button {
      background:var(--btn);
      border:1px solid var(--border);
      color:var(--fg);
      padding:6px 10px;
      border-radius:6px;
      cursor:pointer;
      font-size:1rem;
      min-width:90px;
      margin-bottom:4px;
    }
    .container-julia-editor .toolbar button:hover {
      filter:brightness(1.15);
    }
    .container-julia-editor #editor {
      height:calc(98vh - 44px);
      width:100%;
      min-height:300px;
    }
    .toast {
      position:fixed;
      bottom:20%;
      left:50%;
      transform:translateX(-50%);
      background:#de9406;
      color:#e6e6e6;
      border:1px solid #453a2a;
      padding:8px 12px;
      border-radius:8px;
      z-index:999;
      font-size:1rem;
      max-width:90%;
      text-align:center;
      word-break:break-word;
    }
    @media (max-width: 700px) {
      .container-julia-editor .toolbar {
        flex-direction:column;
        align-items:flex-start;
        padding:8px 4px;
      }
      .container-julia-editor .toolbar .left,
      .container-julia-editor .toolbar .right {
        width:100%;
        justify-content:flex-start;
        gap:6px;
      }
      .container-julia-editor .toolbar input {
        width:100%;
        margin-bottom:6px;
      }
      .container-julia-editor .toolbar button {
        width:100%;
        margin-bottom:6px;
      }
      .container-julia-editor #editor {
        height:calc(100vh - 100px);
        min-height:200px;
      }
    }
    @media (max-width: 400px) {
      .container-julia-editor .toolbar label {
        font-size:0.95em;
      }
      .container-julia-editor .toolbar button {
        font-size:0.95em;
        padding:5px 6px;
      }
      .toast {
        font-size:0.95em;
        padding:6px 8px;
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

            <span>Julia Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Julia Editor Online
        </h1>
        

 <div class="container-julia-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="script.jl" spellcheck="false" />
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
      n.className = "toast";
      n.textContent = msg;
      document.body.appendChild(n);
      setTimeout(() => n.remove(), 1100);
    }

    require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {
      // Create editor
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "# Julia sample script",
          "println(\"Hello, Julia!\")",
          "",
          "# Try typing: println , function , for-loop , if-else , DataFrame , plot"
        ].join("\n"),
        language: "julia",      // Monaco may highlight if language support available; custom provider gives completions
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 14,
        lineHeight: 22
      });

      // ---- Custom IntelliSense / Snippets for Julia ----
      monaco.languages.registerCompletionItemProvider("julia", {
  triggerCharacters: ['.', '(', '"', "'", '[', ' '],
  provideCompletionItems: () => {
    const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
    const K = monaco.languages.CompletionItemKind;

    const suggestions = [
      // println()
      {
        label: "println",
        kind: K.Function,
        insertTextRules: R,
        insertText: 'println("$1")',
        documentation: "Prints value followed by newline"
      },
      // function template
      {
        label: "function",
        kind: K.Snippet,
        insertTextRules: R,
        insertText: [
          "function ${1:name}(${2:args})",
          "    ${3:# body}",
          "    return ${4:result}",
          "end"
        ].join("\n"),
        documentation: "Define a function"
      },
      // for-loop
      {
        label: "for-loop",
        kind: K.Snippet,
        insertTextRules: R,
        insertText: [
          "for ${1:i} in ${2:1:10}",
          "    ${3:println(${1})}",
          "end"
        ].join("\n"),
        documentation: "Basic for loop"
      },
      // if-else
      {
        label: "if-else",
        kind: K.Snippet,
        insertTextRules: R,
        insertText: [
          "if ${1:condition}",
          "    ${2:# true branch}",
          "else",
          "    ${3:# false branch}",
          "end"
        ].join("\n"),
        documentation: "If / else statement"
      },
      // DataFrame snippet (using DataFrames.jl)
      {
        label: "DataFrame",
        kind: K.Function,
        insertTextRules: R,
        insertText: [
          "using DataFrames",
          "df = DataFrame(${1:col1} = ${2:[1,2,3]}, ${3:col2} = ${4:[\"A\",\"B\",\"C\"]})",
          "first(df, ${5:5})"
        ].join("\n"),
        documentation: "Create a DataFrame (DataFrames.jl)"
      },
      // Plot snippet (Plots.jl)
      {
        label: "plot",
        kind: K.Function,
        insertTextRules: R,
        insertText: [
          "using Plots",
          "x = 1:10",
          "y = rand(10)",
          "plot(x, y, seriestype = :scatter, title = \"${1:Title}\", xlabel = \"${2:x}\", ylabel = \"${3:y}\")"
        ].join("\n"),
        documentation: "Basic plot using Plots.jl"
      },
      // let-block
      {
        label: "let",
        kind: K.Snippet,
        insertTextRules: R,
        insertText: [
          "let ${1:var} = ${2:value}",
          "    ${3:# code}",
          "end"
        ].join("\n"),
        documentation: "let block scope"
      },
      // struct template
      {
        label: "struct",
        kind: K.Snippet,
        insertTextRules: R,
        insertText: [
          "struct ${1:Name}",
          "    ${2:field1}::${3:Type}",
          "end"
        ].join("\n"),
        documentation: "Define a struct"
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
        const name = (document.getElementById("filename").value || "script.jl").trim();
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const url = URL.createObjectURL(blob);
        const a = document.createElement("a");
        a.href = url;
        a.download = name;
        a.click();
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

      flash("Julia Editor ready");
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>