<?php
$strurl = base_url();
require FCPATH . "include/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

 
    <title>Scala Editor Online – Edit and Run Scala Code Instantly</title>
    <meta name="description" content="Edit, write, and run Scala code online with ease. Free online Scala editor tool for instant code editing, execution, and testing.">
    <meta property="og:title" content="Scala Editor Online – Edit and Run Scala Code">
    <meta property="og:description" content="Edit, write, and run Scala code online with ease. Free online Scala editor tool for instant code editing, execution, and testing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://easyshiksha.com/programming-editors/scala-editor-online">
    <meta property="og:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Scala Editor Online – Edit and Run Scala Code">
    <meta name="twitter:description" content="Edit, write, and run Scala code online with ease. Free online Scala editor tool for instant code editing, execution, and testing.">
    <meta name="twitter:image" content="https://easyshiksha.com/assets/images/ogimages/homepage.png">

    <link rel="stylesheet" href="<?= base_url() ?>assets/compilers_module_assets/combined-stylesheet-tools-page.css?v=1.1.1">
<style>
    .container-scala-editor {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #1e1e1e;
      color: white;
      height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .container-scala-editor header.toolbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 8px 12px;
      background: #413821;
      border-bottom: 1px solid #5a4e2e;
    }
    .container-scala-editor header .left label {
      margin-right: 5px;
    }
    .container-scala-editor header input {
      padding: 4px;
      background: #222;
      color: white;
      border: 1px solid #5a4e2e;
    }
    .container-scala-editor header button {
      margin-left: 8px;
      padding: 4px 10px;
      background: #de9406;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
    }
    .container-scala-editor header button:hover {
      filter: brightness(1.1);
    }
    .container-scala-editor #container {
      flex: 1;
      width: 100%;
    }
    .container-scala-editor #flash {
      position: fixed;
      bottom: 15px;
      left: 50%;
      transform: translateX(-50%);
      background: #444;
      padding: 8px 14px;
      border-radius: 5px;
      display: none;
    }
        @media (max-width: 663px) {
      .container-scala-editor header.toolbar{
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
      }
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs/loader.js"></script>
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

            <span>Scala Editor Online</span>
        </div>
        <h1 class="page-title-tools-module">
            Scala Editor Online
        </h1>
        

         <div class="container-scala-editor">
  <header class="toolbar">
    <div class="left">
      <label for="filename">File:</label>
      <input id="filename" type="text" value="Main.scala" spellcheck="false" />
    </div>
    <div class="right">
      <button id="btn-full">⛶ Fullscreen</button>
      <button id="btn-copy">📋 Copy</button>
      <button id="btn-save">💾 Save</button>
    </div>
  </header>
  <div id="container"></div>
  <div id="flash"></div>
</div>


    </div>


   <script>
    require.config({ paths: { vs: "https://cdn.jsdelivr.net/npm/monaco-editor@0.45.0/min/vs" } });
    require(["vs/editor/editor.main"], function () {
      const editor = monaco.editor.create(document.getElementById("container"), {
        value: [
          "import org.apache.spark.sql.SparkSession",
          "",
          "object Main {",
          "  def main(args: Array[String]): Unit = {",
          "    val spark = SparkSession.builder.appName(\"Scala Spark Example\").getOrCreate()",
          "    import spark.implicits._",
          "    val df = Seq((1, \"Alice\"), (2, \"Bob\")).toDF(\"id\", \"name\")",
          "    df.show()",
          "  }",
          "}"
        ].join("\n"),
        language: "scala",
        theme: "vs-dark",
        automaticLayout: true,
      });

      // Custom IntelliSense
      monaco.languages.registerCompletionItemProvider("scala", {
        provideCompletionItems: () => {
          return {
            suggestions: [
              {
                label: "object",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: ["object ${1:Name} {", "  def main(args: Array[String]): Unit = {", "    $0", "  }", "}"].join("\n"),
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "Scala Object template"
              },
              {
                label: "def",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "def ${1:functionName}(${2:args}): ${3:ReturnType} = {\n  $0\n}",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "Define a function"
              },
              {
                label: "for-loop",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "for (${1:i} <- 0 until ${2:n}) {\n  $0\n}",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "For loop"
              },
              {
                label: "if-else",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "if (${1:condition}) {\n  $0\n} else {\n  \n}",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "If else statement"
              },
              {
                label: "SparkSession",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "val spark = SparkSession.builder.appName(\"${1:AppName}\").getOrCreate()",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "SparkSession builder"
              },
              {
                label: "DataFrame select",
                kind: monaco.languages.CompletionItemKind.Snippet,
                insertText: "val result = df.select(\"${1:column}\")\nresult.show()",
                insertTextRules: monaco.languages.CompletionItemInsertTextRule.InsertAsSnippet,
                documentation: "Select column from DataFrame"
              }
            ]
          };
        }
      });

      // Flash messages
      function flash(msg) {
        const f = document.getElementById("flash");
        f.innerText = msg;
        f.style.display = "block";
        setTimeout(() => (f.style.display = "none"), 2000);
      }

      // Copy
      document.getElementById("btn-copy").onclick = () => {
        navigator.clipboard.writeText(editor.getValue());
        flash("Copied!");
      };

      // Save
      document.getElementById("btn-save").onclick = () => {
        const filename = document.getElementById("filename").value || "Main.scala";
        const blob = new Blob([editor.getValue()], { type: "text/plain" });
        const a = document.createElement("a");
        a.href = URL.createObjectURL(blob);
        a.download = filename;
        a.click();
        flash("Saved!");
      };

      // Fullscreen
      document.getElementById("btn-full").onclick = () => {
        const container = document.getElementById("container");
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