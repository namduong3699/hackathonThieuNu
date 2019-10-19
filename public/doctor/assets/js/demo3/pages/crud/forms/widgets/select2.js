var KTSelect2= {
    init:function() {
        $("#kt_select2_1, #kt_select2_1_validate").select2( {
            placeholder: "Select a state"
        }
        )
    }
}

;
jQuery(document).ready(function() {
    KTSelect2.init()
}

);