@extends('layouts.admin')
@section('content')

    {{-- @extends('layouts.main') --}}





@section('content')
    <div class="flex items-center markdown">

    </div>

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn" id="icons" style="background-color: #433483a3 ; color:aliceblue">
                إضافة مادة جديد
            </a>
        </div>
    </div>
    <div class="card mt-1">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>

        <div class="card-body">


            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Course"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th width="10">
                                #
                            </th>

                            <th style="text-align: center">
                                اسم المادة
                            </th>
                            <th style="text-align: center">
                                السعر
                            </th>
                            <th style="text-align: center">
                                النشاط الاساسي
                            </th>
                            <th style="text-align: center">
                                التصنيف
                            </th>
                            <th style="text-align: center">
                                الماركة
                            </th>

                            <th style="text-align: center">
                                النوع
                            </th>
                            <th style="text-align: center">
                                الحجم
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        @php
                            $i = 1;
                        @endphp
                        @foreach ($items as $item)
                            <tr data-entry-id="{{ $item->id }}" id="{{ $item->id }}">
                                <td>{{ $i++ }}</td>
                                <td id="name">{{ $item->name }}</td>
                                <td id="price">{{ $item->price }}</td>
                                <td class="lines" id="{{ $item->lines }}">
                                    {{ ($item->line) ? $item->line_data->name: '' }}
                                </td>
                                <td id="{{ $item->catogery }}">
                                    {{ $item->catogery ? $item->catogery_data->name : '' }}
                                </td>

                                <td class="brand" id="{{ $item->brand }}">
                                    {{ is_null($item->brand) ? '' : $item->brand_data->name }}
                                </td>
                                <td class="type" id="{{ $item->type }}">
                                    {{ is_null($item->type) ? '' : $item->type_data->name }}
                                </td>
                                <td class="size" id="{{ $item->size }}">
                                    <span class="size_number" {{ $item->size_number }}>
                                        {{ $item->size_number }}</span>{{ isset($item->size) ? $item->size_data->name : '' }}
                                </td>


                                <td>

                                    <span class="d-flex space-x-1">
                                        <a class="btn update m-1" style="background-color: #433483a3 ; color:aliceblue"
                                            data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                            data-price='{{ $item->price }}'
                                            data-catogery={{$item->catogery}}
                                            data-type={{$item->type}}
                                            data-brand={{$item->brand}}
                                            data-line={{$item->line}}
                                            data-size={{$item->size}}
                                            data-size_number={{$item->size_number}}
                                            >
                                            تعديل </a>
                                        {{--  --}}

                                        <button class="btn btn-danger m-1 delete" data-id="{{ $item->id }}"
                                            data-name="{{ $item->name }}">مسح</button>

                                    </span>

                                </td>
                            </tr>
                        @endforeach




                    </tbody>
                </table>
            </div>


        </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ route('item') }}" method="POST" class="form-inlineform-row"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">اﻹسم*</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                    @if ($errors->has('name'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.user.fields.name_helper') }}
                                    </p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price">السعر*</label>
                                    <input type="text" id="price" name="price" class="form-control"
                                        value="{{ old('price') }}" required
                                        onkeypress="return
                                        onlyNumberKey(event)">
                                    @if ($errors->has('price'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('price') }}
                                        </em>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">التصنيف</label>


                                    <select class="form-control" id="exampleFormControlSelect1 main_catog" name="catogery">
                                        <option selected value="">-- إختر --</option>
                                        @foreach ($catogery as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">النوع</label>


                                    <select class="form-control" id="exampleFormControlSelect1 main_catog" name="type">
                                        <option selected value="">-- إختر --</option>
                                        @foreach ($type as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('type') }}
                                        </em>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">الماركة</label>


                                    <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                        name="brand">
                                        <option selected value="">-- إختر --</option>
                                        @foreach ($brand as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">النشاط</label>


                                    <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                        name="line">
                                        <option selected value="">-- إختر --</option>
                                        @foreach ($lines as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif

                                </div>

                                <div class="form-group mx-3">
                                    <label for="category">المقاس</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" name="size_number">
                                        <select class="form-control size" id="size" name="size">
                                            <option selected value="">-- اختر --</option>
                                            @foreach ($size as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category'))
                                        <em class="invalid-feedback">{{ $errors->first('category') }}</em>
                                    @endif
                                </div>



                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>







                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
    {{-- modal for terms --}}
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ route('item.update') }}" method="POST" class="form-inlineform-row"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" id="id" name="id" class="form-control"
                                        value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                    <label for="name">اﻹسم*</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                    @if ($errors->has('name'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </em>
                                    @endif
                                    <p class="helper-block">
                                        {{ trans('cruds.user.fields.name_helper') }}
                                    </p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price">السعر*</label>
                                    <input type="text" id="price" name="price" class="form-control price"
                                        value="{{ old('price') }}" required
                                        onkeypress="return
                                    onlyNumberKey(event)">
                                    @if ($errors->has('price'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('price') }}
                                        </em>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">التصنيف</label>


                                    <select class="form-control catogery" id="exampleFormControlSelect1 main_catog"
                                        name="catogery">
                                        <option value="">-- إختر --</option>
                                        @foreach ($catogery as $item)
                                            <option value="{{ $item->id }}" >{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">النوع</label>


                                    <select class="form-control type" id="exampleFormControlSelect1 main_catog"
                                        name="type">
                                        <option  value="">-- إختر --</option>
                                        @foreach ($type as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('type') }}
                                        </em>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">الماركة</label>


                                    <select class="form-control brand" id="exampleFormControlSelect1 main_catog"
                                        name="brand">
                                        <option  value="">-- إختر --</option>
                                        @foreach ($brand as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="line_catogery">النشاط</label>


                                    <select class="form-control line" id="exampleFormControlSelect1 main_catog"
                                        name="line">
                                        <option  value="">-- إختر --</option>
                                        @foreach ($lines as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>



                                    @if ($errors->has('main_line'))
                                        <em class="invalid-feedback">
                                            {{ $errors->first('main_line') }}
                                        </em>
                                    @endif

                                </div>

                                <div class="form-group mx-3">
                                    <label for="category">المقاس</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control size_number" name="size_number">
                                        <select class="form-control size" id="size" name="size">
                                            <option selected value="">-- اختر --</option>
                                            @foreach ($size as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->has('category'))
                                        <em class="invalid-feedback">{{ $errors->first('category') }}</em>
                                    @endif
                                </div>



                            </div>
                            <div class="d-flex  justify-content-center">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>







                    </div>

                </div>

            </div>

        </div>

    </div>
    </div>
    </div>
    </div>

    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">

                        <P class="text-bold">
                            هل تريد مسح المادة؟
                        </P>
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">



                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ old('name', isset($user) ? $user->name : '') }}" disabled>
                            @if ($errors->has('name'))
                                <em class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </em>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.user.fields.name_helper') }}
                            </p>
                        </div>



                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"
                            style="border-radius: 50%;border:1px">
                            <span style="border-radius: 3rem">
                            </span>
                        </div>


                        <div class="d-flex">
                            <form action="{{ url('item/delete') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="id" name="id" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>
                                <input class="btn btn-danger b-a-1" style="" type="submit" value="مسح">
                            </form>
                        </div>

                    </div>

                </div>

            </div>

            <div>

            </div>
        </div>

    </div>

    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('course_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "#1",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Course:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
        $(document).ready(function() {



            $("#icons").click(function(e) {

                $('#exampleModal').modal('show');


            })
            $(".terms").click(function(e) {

                $('#termsModal').modal('show');
                $('#termsModal #terms').val(this.id)


            })


            $(".update").click(function(e) {

                $('#updateModal').modal('show');
                $('#updateModal #id').val($(this).data('id'))
                $('#updateModal .price').val($(this).data('price'))
                $('#updateModal #name').val($(this).data('name'))
                $('#updateModal .catogery').val($(this).data('catogery'))
                $('#updateModal .type').val( $(this).data('type'))
                $('#updateModal .line').val( $(this).data('line'))
                $('#updateModal .size').val($(this).data('size'))
                $('#updateModal .size_number').val($(this).data('size_number'))
                $('#updateModal .brand').val( $(this).data('brand'))
                $('#updateModal .size_number').val()
                console.log($('#' + $(this).data('id') + '>.size span').html());

                $('#updateModal form #exampleFormControlSelect1 .brand').val('brand').change()
                $('#updateModal form #exampleFormControlSelect1 .type').val('type').change()
                // console.log($(this).data('type'));
                $('#updateModal form #exampleFormControlSelect1 .size').val($(this).data('size')).change()
                $('#updateModal form #exampleFormControlSelect1 .size_number').val($(this).data(
                    'size_number')).change()

                // $('#updateModal #id').val(this.parent().find('#name'))
                // console.log($(this).parent().parent().find('td #name').val());


            })
            $(".icons_modal").click(function(e) {
                e.preventDefault

                $("#icon_name").val(this.id);

                // console.log( $("#icons_modal").find('.fa')[0].attr('id'));
            })
        });

        $(".delete").click(function(e) {

            $('#deleteModal').modal('show');
            $('#deleteModal #id').val($(this).data('id'))
            $('#deleteModal #name').val($(this).data('name'))



            // $('#updateModal #id').val(this.parent().find('#name'))
            // console.log($(this).parent().parent().find('td #name').val());

        })
    </script>
@endsection


@endsection
