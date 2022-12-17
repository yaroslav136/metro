<textarea class="form-control richTextBox" name="{{ $row->field }}" id="richtext{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>

@push('javascript')
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="{{ $row->field }}"]',
                content_style: "body {font-size: 14pt;}",
            }

            $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? (object)[]) !!})

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
@endpush
