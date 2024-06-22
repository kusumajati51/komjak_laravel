<textarea id="{{ $getId() }}" name="{{ $getName() }}" hidden>{{ $getState() }}</textarea>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    tinymce.init({
      selector: '#{{ $getId() }}',
      plugins: 'link image media',
      toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image media',
      media_live_embeds: true,
      setup: function (editor) {
        editor.on('change', function () {
          editor.save();
        });
      }
    });
  });
</script>