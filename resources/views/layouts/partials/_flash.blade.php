@if ($data = Session::get('data'))
{{-- {{ dd($data) }} --}}
<script>
    Toastify({
        text: "{!! $data['message'] !!}",
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        style: {
            background: "{!! $data['type'] == 'success' ? '#22ff67' : '#00FF00'  !!}",
        },
    }).showToast();
 </script>
 @endif