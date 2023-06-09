<!-- <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script> -->

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<!-- <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script> -->


<script type="text/javascript" src="{{ asset('assets/bs4/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/bs4/js/dataTables.fixedColumns.min.js')}}"></script>


<!-- Page JS Plugins -->
{{-- <!-- <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script> --> --}}

<!-- Page JS Code -->
{{-- <!-- <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script> --> --}}


<!-- Page JS Helpers (Select2 plugin) -->


<!-- Page JS Plugins -->
<script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/dropzone/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/summernote/summernote-bs4.min.js') }}"></script>

{{-- <!-- <script src="{{ asset('assets/js/plugins/jquery-ui-2/jquery-ui.min.js') }}"></script> --> --}}


<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
<script>jQuery(function(){ One.helpers(['datepicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'summernote']); });</script>

{{-- <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->

<!-- <script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.min.js')}}"></script> -->

<!-- <script type="text/javascript" src="{{ asset('assets/js/dataTables.fixedColumns.min.js') }}"></script>-->
<!-- <script type="text/javascript" src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script> --> --}}


<script src="https://cdn.datatables.net/plug-ins/1.10.20/dataRender/datetime.js"></script>
<!-- Page JS Code -->
{{-- <script src="{{ asset('assets/js/plugins/jquery-validation/localization/messages_id.js') }}"></script> --}}
<script src="{{ asset('assets/js/datatable_button/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable_button/jszip.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable_button/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/datatable_button/buttons.colVis.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function formatDate (input) {
        var datePart = input.match(/\d+/g),
        year = datePart[0], // get only two digits
        month = datePart[1],
        day = datePart[2];
        return day+'-'+month+'-'+year;
    }
</script>





