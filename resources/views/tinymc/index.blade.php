@extends('layout.main')
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="modal fade" id="create_member">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Add Member</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger">The field labels marked with * are required input fields.</p>
                            <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Upload Your Photo<span style="color:red;"> *</span></label>
                                                <input id="image" type="file" name="photo" required class="form-control" id="exampleInputPassword1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="input-group">
                                                 <label>Code Generate</label>
                                                <input type="text" name="code" class="form-control" id="code" aria-describedby="code" required>
                                                <div class="input-group-append">
                                                    <button id="genbutton" type="button" class="btn btn-sm btn-default" title="{{trans('file.Generate')}}"><i class="fa fa-refresh"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product Details</label>
                                                <textarea name="" class="form-control"  id="" cols="" rows="3"></textarea>

                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <label for=""></label>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <div type="" class=""></div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_member"><i class="fa-regular fa-plus"></i> Add Member</button>
                    <br>
                    <br>
                    <h1>All Member </h1>
                </div>
                <div class="col-sm-6" style=""></div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Photo </th>
                                        <th>Name</th>
                                        <th>Father's Name </th>
                                        <th>Mother's Name</th>
                                        <th>Address</th>
                                        <th>Permanent Address</th>
                                        <th>Date of Birth</th>
                                        <th>Education</th>
                                        <th>Company Name</th>
                                        <th>Designation</th>
                                        <th>Company Address</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Blood</th>
                                        <th>NID</th>
                                        <th>Juridiction of Factory</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                $i = 0;
                                @endphp
                                {{-- <tbody>
                                    @foreach( $members as $member)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td><img src="{{ asset('member_image/'.$member->photo ??'') }}" alt="" width="80px;"></td>
                                        <td>{{ $member->member_name ?? ''}}</td>
                                        <td>{{ $member->father_name ?? ''}}</td>
                                        <td>{{ $member->mother_name ?? ''}}</td>
                                        <td>{{ $member->address ?? ''}}</td>
                                        <td>{{ $member->permanent_address ?? ''}}</td>
                                        <td>{{ $member->birth ?? ''}}</td>
                                        <td>{{ $member->education ?? ''}}</td>
                                        <td>{{ $member->company_name ?? ''}}</td>
                                        <td>{{ $member->designation ?? ''}}</td>
                                        <td>{{ $member->company_address ?? ''}}</td>
                                        <td>{{ $member->phone ?? ''}}</td>
                                        <td>{{ $member->email ?? ''}}</td>
                                        <td>{{ $member->blood ?? ''}}</td>
                                        <td>{{ $member->nid ?? ''}}</td>
                                        <td>
                                            @if($member->cbc_type == '1')
                                            <a href="" class="text-success"> Paid </a>
                                            @else
                                            <a href="" class="text-danger"> UnPaid </a>
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_member_{{$member->id}}"><i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i></button>

                                            <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="">
                                                <a href="{{ route('member.show', $member->id) }}" class="text-danger"><i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                                </a></button>

                                            <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal"><a id="delete" href="{{ route('member.delete', $member->id) }}" class="text-danger"><i class="fa-solid fa-trash-can"></i></a></button>
                                        </td>
                                    </tr>
                                    @include('member.edit_modal')
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<script>
    // tinymce.init({
    // selector: 'textarea', // change this value according to your HTML
    // plugins: 'a_tinymce_plugin',
    // a_plugin_option: true,
    // a_configuration_option: 400
    // });

    tinymce.init({
    selector: 'textarea',
    height: 130,
    plugins: [
    'advlist autolink lists link image charmap print preview anchor textcolor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code wordcount'
    ],
    toolbar: 'insert | undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
    branding:false
    });

</script>
@endsection
