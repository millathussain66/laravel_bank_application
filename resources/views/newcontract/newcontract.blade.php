<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Contract') }}
        </h2>
    </x-slot> --}}
    <style>
        div.k-edit-form-container {
            width: auto;
            height: auto;
        }

        #for_poppu {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .popup {
            position: absolute;
            left: 50%;
            right: 50%;
            top: 50%;
            bottom: 50%;
            width: 100%;
            height: 100%;
        }


    </style>
    <script>
        $(document).ready(function() {
            $("#submit_btn").click(function(e){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                var formData = $("#form_data").serializeArray();
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: 'new_contract',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {

                        console.log(data);


                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        });



    function CustomerPickList(module_name=null,data_field_name=null) {

        if(jQuery("#add_edit").val()=='edit')
        {
            if (jQuery("#file_delete_value_"+data_field_name).val()==0)
            {
                alert('Please Delete Previous file for new upload');
                return false;
            }
        }

        var url = "{{url('document_file_upload', '')}}"+"/"+module_name+'/'+data_field_name;

        newwindow=window.open(url,"Upload","width=550,height=350,resizable=0,scrollbars=0,location=no,menubar=no,toolbar=no,minimizable=no,status=no,top=140,left=340");
        if (window.focus) {newwindow.focus()}
        return false;

    }






    </script>


    <div id="for_poppu" class="container h-100 w-100 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">



        <img style="cursor:pointer;width:30px" src="{{ URL('images/folder.png') }}" alt="upload" title="Upload" onclick="CustomerPickList('all','doc_file')"/>

        <br>








        <div class="card p-3 shadow" style="max-width: 100%;">
            <h2 class="text-center p-3">New Contract</h2>
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Form</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Grid</button>
                </div>
            </nav>
            <div class="tab-content p-3 border bg-light" id="nav-tabContent">
                <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <form method="POST" id="form_data" enctype="multipart/form-data">
                            <div class="d-flex justify-content-evenly ">

                        <table style="with:40%">
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Ref Number</label><span
                                        style="color:red">*</span>:</td>
                                <td><input readonly type="text" class="form-control" id="ref_no" name="ref_no" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Po Number</label><span
                                        style="color:red">*</span>:</td>
                                <td style="text-align: right"><input type="text" class="form-control" id="po_no" name="po_no" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Contract Catagory </label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="contract_cat" name="contract_cat" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Contract Type</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="contract_type" name="contract_type" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Amount</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="amount" name="amount" required>
                                </td>
                            </tr>

                        </table>

                        <table style="with:40%">



                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Effective Date</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="e_date" name="e_date" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">End Date</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="" id="end_date" name="end_date" required>
                                </td>
                            </tr>


                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Vendor Name</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Vendor Address</label><span
                                        style="color:red">*</span>:</td>
                                <td><input type="text" class="form-control" id="venor_address" name="venor_address" required>
                                </td>
                            </tr>

                            <tr>
                                <td style="text-align: right"><label for="your-name" class="form-label">Remarks</label><span
                                        style="color:red">*</span>:</td>
                                <td><textarea name="remarks" id="remarks"cols="20" rows="1"></textarea>
                                </td>
                            </tr>


                        </table>


                    </div>   </form>

                    <div class="text-center mt-3">
                        <button id="submit_btn" type="button" class="btn btn-primary btn-lg text-dark">Save button</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div id="grid"></div>
                </div>

            </div>
        </div>
    </div>



    <div class="container" style="display: " id="details" style="visibility:hidden;">
        <div style="padding-left: 17px"><strong><label id="header_title"></label></strong></div>

        <div style="display: none;" class="popup" id="dialog"></div>


    </div>
    </div>



</x-app-layout>
