(function() {
  tinymce.PluginManager.add('app', function(editor, url) {
    editor.onPreInit.add(function(ed) {
      var doc = ed.getDoc();

      var jscript = "(function() {\n\
        var config = {\n\
          kitId: 'oal1anq'\n\
        };\n\
        var d = false;\n\
        var tk = document.createElement('script');\n\
        tk.src = '//use.typekit.net/' + config.kitId + '.js';\n\
        tk.type = 'text/javascript';\n\
        tk.async = 'true';\n\
        tk.onload = tk.onreadystatechange = function() {\n\
          var rs = this.readyState;\n\
          if (d || rs && rs != 'complete' && rs != 'loaded') return;\n\
          d = true;\n\
          try { Typekit.load(config); } catch (e) {}\n\
        };\n\
        var s = document.getElementsByTagName('script')[0];\n\
        s.parentNode.insertBefore(tk, s);\n\
      })();";

      var script = doc.createElement("script");
      script.type = "text/javascript";
      script.appendChild(doc.createTextNode(jscript));
      console.log(script);
      doc.getElementsByTagName('head')[0].appendChild(script);
    });
  });
})();
