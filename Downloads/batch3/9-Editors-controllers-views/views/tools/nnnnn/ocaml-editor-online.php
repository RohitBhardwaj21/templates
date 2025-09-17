<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>OCaml Editor Online – Edit and Run OCaml Code Instantly</title>
    <meta name="description" content="Edit, write, and run OCaml code online with ease. Free online OCaml editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="OCaml Editor Online – Edit and Run OCaml Code">
    <meta property="og:description" content="Edit, write, and run OCaml code online with ease. Free online OCaml editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/ocaml-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="OCaml Editor Online – Edit and Run OCaml Code">
    <meta name="twitter:description" content="Edit, write, and run OCaml code online with ease. Free online OCaml editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">


      <style>
    .container-ocaml-editor {
      margin: 0; padding: 0; height: 100%;
      display: flex; flex-direction: column;
      background: #1e1e1e; color: #e6e6e6; font-family: sans-serif;
      min-height: 100vh;
    }
    .container-ocaml-editor header.toolbar {
      display: flex; justify-content: space-between; align-items: center;
      background: #3b301b; padding: 6px 12px; border-bottom: 1px solid #444;
    }
    .container-ocaml-editor .left, .container-ocaml-editor .right { display:flex; align-items:center; gap:8px; }
    .container-ocaml-editor header.toolbar input, .container-ocaml-editor header.toolbar select {
      background: #1e1e1e; color: #e6e6e6;
      border: 1px solid #de9406; padding: 4px 8px; border-radius: 4px;
    }
    .container-ocaml-editor header.toolbar button {
      background: #de9406; color: #fff; border: 1px solid #555;
      padding: 4px 10px; border-radius: 4px; cursor: pointer;
    }
    .container-ocaml-editor header.toolbar button:hover { filter: brightness(1.1); }
    .container-ocaml-editor #editor { flex: 1; min-height: 0; }
    .container-ocaml-editor .examples { background:#3b301b; padding:4px 6px; border-radius:6px; border:1px solid #3b301b; color:#ddd }

    @media (max-width: 992px) {
       .container-ocaml-editor .toolbar{
        flex-direction: column;
        gap: 10px;
       }
      .container-ocaml-editor .toolbar .left{
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
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

            <span>OCaml Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            OCaml Editor Online
        </h1>
        

         <div class="container-ocaml-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="main.ml" spellcheck="false" />
      <label for="example-select" style="margin-left:8px;color:#bbb;font-size:13px">Examples:</label>
      <select id="example-select" class="examples" title="Choose example to insert">
        <option value="">— select example —</option>
        <option value="let square x = x * x">let square</option>
        <option value="let rec fact n = if n = 0 then 1 else n * fact (n - 1)">factorial</option>
        <option value="let rec fib n = if n < 2 then n else fib (n-1) + fib (n-2)">fibonacci</option>
        <option value="type person = { name : string; age : int }">type record</option>
        <option value="match opt with | Some x -> x | None -> 0">match option</option>
        <option value="List.map (fun x -> x * 2) [1;2;3]">List.map</option>
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
    // Toast helper (EXACT code you provided)
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
      n.style.padding = "6px 12px";
      n.style.borderRadius = "6px";
      n.style.zIndex = "100000";
      document.body.appendChild(n);
      setTimeout(() => n.remove(), 1000);
    }

    require.config({ paths: { vs: "https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {
      // --- Register basic OCaml language (id + tokenizer) ---
      monaco.languages.register({ id: "ocaml" });

      // Minimal Monarch for OCaml (approximate; good enough for highlighting)
      monaco.languages.setMonarchTokensProvider("ocaml", {
        defaultToken: "",
        tokenPostfix: ".ocaml",
        brackets: [
          ["{", "}", "delimiter.curly"],
          ["[", "]", "delimiter.bracket"],
          ["(", ")", "delimiter.parenthesis"]
        ],
        keywords: [
          "let","in","rec","and","fun","function","if","then","else","match","with","when",
          "type","module","open","struct","sig","end","object","method","class","inherit",
          "val","mutable","exception","try","raise","while","for","to","downto","do","done",
          "as","of","new","begin"
        ],
        operators: [
          "=", "<", ">", "<=", ">=", "<>", "||", "&&", "+", "-", "*", "/", "::", "|", ":",
          "->", "<-", "mod", "land", "lor", "lxor", "lsl", "lsr", "asr", ";;"
        ],
        symbols: /[=><!~?:&|+\-*\/\^%]+/,
        escapes: /\\(?:[abtnvfr"']|x[0-9A-Fa-f]{2}|[0-9]{3})/,
        tokenizer: {
          root: [
            // comments (handle simple nesting)
            [/\(\*/, "comment", "@comment"],
            // strings
            [/"/, { token: "string.quote", next: "@string" }],
            // numbers
            [/\b0x[0-9a-fA-F_]+\b/, "number.hex"],
            [/\b\d[\d_]*\b/, "number"],
            // identifiers / keywords
            [/[a-zA-Z_][\w']*/, {
              cases: {
                "@keywords": "keyword",
                "@default": "identifier"
              }
            }],
            // delimiters and operators
            [/[{}()\[\]]/, "@brackets"],
            [/@symbols/, {
              cases: {
                "@operators": "operator",
                "@default": ""
              }
            }],
            [/[;,.]/, "delimiter"]
          ],
          comment: [
            [/\(\*/, "comment", "@comment"],
            [/\*\)/, "comment", "@pop"],
            [/[^*(]+/, "comment"],
            [/[*()]/, "comment"]
          ],
          string: [
            [/@escapes/, "string.escape"],
            [/"/, { token: "string.quote", next: "@pop" }],
            [/./, "string"]
          ]
        }
      });

      // --- Create Editor ---
      const editor = monaco.editor.create(document.getElementById("editor"), {
        value: [
          "(* OCaml sample *)",
          "let square x = x * x",
          "",
          "let rec fact n =",
          "  if n = 0 then 1 else n * fact (n - 1)",
          "",
          "let () =",
          "  print_endline (string_of_int (square 5));",
          "  print_endline (string_of_int (fact 5))",
          "",
          "(* Try typing: let, match, type, List.map, module *)"
        ].join("\n"),
        language: "ocaml",
        theme: "vs-dark",
        automaticLayout: true,
        minimap: { enabled: false },
        fontSize: 13,
        lineHeight: 20
      });

      // --- Custom IntelliSense (snippets + functions) ---
      monaco.languages.registerCompletionItemProvider("ocaml", {
        triggerCharacters: [' ', '.', '(', '[', '{', '|'],
        provideCompletionItems: () => {
          const R = monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet;
          const K = monaco.languages.CompletionItemKind;

          const suggestions = [
            // print_endline
            {
              label: "print_endline",
              kind: K.Function,
              insertTextRules: R,
              insertText: 'print_endline "${1:Hello World}"',
              documentation: "Print a string followed by newline"
            },
            // let-binding
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
            // let rec function
            {
              label: "let rec function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "let rec ${1:f} ${2:x} =",
                "  ${3:(* body *)}",
                "$0"
              ].join("\n"),
              documentation: "Recursive function"
            },
            // function / pattern matching
            {
              label: "function",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "function",
                "| ${1:pattern1} -> ${2:expr1}",
                "| ${3:pattern2} -> ${4:expr2}"
              ].join("\n"),
              documentation: "`function` with pattern matches"
            },
            // match with
            {
              label: "match-with",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "match ${1:value} with",
                "| ${2:pattern1} -> ${3:expr1}",
                "| ${4:pattern2} -> ${5:expr2}"
              ].join("\n"),
              documentation: "Pattern matching"
            },
            // if-then-else
            {
              label: "if-else",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "if ${1:cond} then",
                "  ${2:expr1}",
                "else",
                "  ${3:expr2}"
              ].join("\n"),
              documentation: "If / else"
            },
            // type record
            {
              label: "type-record",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "type ${1:person} = {",
                "  ${2:name} : string;",
                "  ${3:age} : int;",
                "}"
              ].join("\n"),
              documentation: "Record type"
            },
            // module skeleton
            {
              label: "module",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "module ${1:M} = struct",
                "  ${2:(* definitions *)}",
                "end"
              ].join("\n"),
              documentation: "Module definition"
            },
            // open
            {
              label: "open",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: "open ${1:Module}",
              documentation: "Open a module"
            },
            // List.map
            {
              label: "List.map",
              kind: K.Function,
              insertTextRules: R,
              insertText: "List.map (fun ${1:x} -> ${2:expr}) ${3:list}",
              documentation: "Map over list"
            },
            // Option match
            {
              label: "option-match",
              kind: K.Snippet,
              insertTextRules: R,
              insertText: [
                "match ${1:opt} with",
                "| Some ${2:x} -> ${3:x}",
                "| None -> ${4:default}"
              ].join("\n"),
              documentation: "Match on option"
            }
          ];

          return { suggestions };
        }
      });

      // --- Examples insert ---
      document.getElementById("btn-insert").addEventListener("click", () => {
        const sel = document.getElementById("example-select");
        const code = sel.value;
        if (!code) { flash("Select an example first"); return; }
        const pos = editor.getPosition();
        editor.executeEdits("insert-example", [{
          range: new monaco.Range(pos.lineNumber, pos.column, pos.lineNumber, pos.column),
          text: code + "\n"
        }]);
        editor.focus();
        flash("Example inserted");
      });

      // Copy
      document.getElementById("btn-copy").addEventListener("click", () => {
        navigator.clipboard.writeText(editor.getValue()).then(() => flash("Copied!"));
      });

      // Save
      document.getElementById("btn-save").addEventListener("click", () => {
        const filename = (document.getElementById("filename").value || "main.ml").trim();
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = filename;
        a.click();
        URL.revokeObjectURL(a.href);
        flash("Saved!");
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

      flash("OCaml Editor ready");
    });
  </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>/\ -->



</body>

</html>

<?php
require FCPATH . "include/footer.php";
?>