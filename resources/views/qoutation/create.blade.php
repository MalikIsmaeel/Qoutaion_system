@extends('layouts.admin')
@section('content')

    {{-- @extends('layouts.main') --}}





@section('content')
    <div class="flex items-center markdown">

    </div>


    <div class="card mt-1">
        <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

        </div>
        {{-- quotaion master --}}
        <div class="card-body">
            <form method="POST" action="{{ route('qoute.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group row-md-3">
                            <label for="inputZip">المرجع</label>
                            <input type="text" name="id" class="form-control" value="Q" readonly
                                id="inputZip">


                        </div>
                        <div class="form-group row-md-3">
                            <label for="inputZip">العميل</label>
                            <select id="inputState" name="customer" class="customer form-control">
                                <option selected>-- إختر --</option>

                                @foreach ($customer as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endforeach


                            </select>

                        </div>



                        <div class="form-group row-md-3">
                            <label for="inputZip">الوصف</label>
                            <input type="text" name="description" class="form-control" id="inputZip">


                        </div>
                        <div class="form-group row-md-3">
                            <label for="inputZip">المعامل</label>
                            <input type="text" name="factor" class="form-control factor" id="inputZip">


                        </div>
                        <div class="form-group row-md-3">
                            <label for="inputZip">المشروع</label>
                            <input type="text" name="project_name" class="form-control" id="inputZip">


                        </div>
                        <div class="form-group row-md-3">
                            <label for="inputZip">تاريخ الانشاء</label>
                            <input type="date" name="qoutation_date" class="form-control" id="inputZip">


                        </div>
                        <div class="form-group row-md-3">
                            <label for="inputZip">تاريخ الانتهاء</label>
                            <input type="date" name="expire_date" class="form-control" id="inputZip">


                        </div>
                        <span class="form-group row-md-3">
                            <label for="inputZip">الحالة</label>
                            <select id="inputState" name="statues" class="form-control">
                                <option selected>-- الحالة --</option>
                                <option selected> موافق </option>
                                <option selected> مسودة </option>
                                <option selected> تمت فوترة </option>
                                <option selected> بانتظار الموافقة </option>



                            </select>


                        </span>
                    </div>
                    <div class="col">
                        <div class="card mt-1">
                            <div class="card-header  text-3xl" style="background-color: #201843a3 ; color:aliceblue">
                                بيانات العميل
                            </div>
                            {{-- quotaion master --}}
                            <div class="card-body   h-50 ">
                                <table class="table table-auto ">


                                    <tbody class="customer_data">
                                        <tr class=" border-bottom-0 ">
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>



                                        </tr>
                                        <tr class=" border-bottom-0 ">
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>



                                        </tr>
                                        <tr class=" border-bottom-0 ">
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>



                                        </tr>
                                        <tr class= "border-bottom-0 ">
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>
                                            <td class=" border-bottom-0  border-top-0">&emsp13;</td>



                                        </tr>
                                    </tbody>




                                </table>
                            </div>
                        </div>
                        <div class="form-row">



                        </div>






                    </div>
                </div>
                @foreach ($line as $item)
                    <div class="card mt-1 card-detail border-0">



                        <div class="card-body border-2">

                            <div class="table-responsive">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input lines" name="lines[]"
                                        value="{{ $item->id }}" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1">
                                        {{ $item->name }}
                                    </label>
                                </div>

                                <table class=" table table-bordered   overflow-x-scroll" style="text-align: center">
                                    <thead class=" overflow-x-scroll bg-blue-50">
                                        <tr class=" overflow-x-scroll">
                                            <th width="10">
                                                #
                                            </th>

                                            <th style="text-align: center">
                                                اسم المادة
                                            </th>
                                            <th style="text-align: center">
                                                الوحدات
                                            </th>
                                            <th style="text-align: center">
                                                سعر الوحدة
                                            </th>
                                            <th style="text-align: center">
                                                الكمية
                                            </th>
                                            <th style="text-align: center">
                                                المجموع</th>
                                            <th style="text-align: center">
                                                المواد المساعدة
                                            </th>
                                            <th style="text-align: center">
                                                د/المواد
                                            </th>
                                            <th style="text-align: center">
                                                -غير ذلك المواد
                                            </th>
                                            <th style="text-align: center">
                                                المجموع المواد</th>
                                            <th style="text-align: center">
                                                المجموع المواد/الكلي</th>

                                            <th style="text-align: center">
                                                الايادي العاملة</th>

                                            <th style="text-align: center">
                                                غير ذلك- الايادي </th>
                                            <th style="text-align: center">
                                                المجموع العمالة</th>
                                            <th style="text-align: center">
                                                الايادي العاملة/الكلي</th>
                                            <th style="text-align: center">
                                                مجموع التكلفة الكلية </th>
                                            &nbsp;
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="line_data" id="{{ $item->name }}">

                                        <tr>
                                            <td width="10">
                                                #
                                            </td>

                                            <td style="text-align: center">
                                                <select class="form-control products" id="{{ $item->id }}"
                                                    name="item[{{ $item->id }}][]">
                                                    <option selected value="">-- إختر --</option>
                                                    @foreach ($items as $product)
                                                        <option value="{{ $product->id }}">{{ $product->name }} <span
                                                                id="{{ $product->id }}">{{ $product->price }}</span>
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="units[{{ $item->id }}][]"
                                                    id="">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="factor_price[{{ $item->id }}][]"
                                                    class="factor_price" readonly id="{{ $item }}[]">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="qty[{{ $item->id }}][]" class="qty"
                                                    id="{{ $item }}[]">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="simetot[{{ $item->id }}][]" readonly
                                                    class="simetot">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material[{{ $item->id }}][]"
                                                    class="material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_acc[{{ $item->id }}][]"
                                                    value="0" id="" class="material_acc">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_other[{{ $item->id }}][]"
                                                    value="0" id="" class="material_other">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="" readonly class="tot_material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="" readonly class="all_material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="labour[{{ $item->id }}][]"
                                                    id="" class="labour">
                                            </td>


                                            <td style="text-align: center">

                                                <input type="text" name="labour_other[{{ $item->id }}][]"
                                                    id="" class="labour_other">
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="" class="tot_labour">
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="" class="all_labour" readonly>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="hole_tot[{{ $item->id }}][]"
                                                    id="" class="all_tot" readonly>

                                            </td>
                                            <td style="text-align: center">
                                                &emsp;

                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group col-md-2 justify-center">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="submit" value="إضافة" class="form-control btn-bd-primary btn-line"
                                    id="{{ $item->name }}">
                            </div>
                        </div>
                @endforeach
                <div class="form-group col-md-2 justify-center">
                    <label for="inputZip"> &emsp14; </label>
                    <input type="submit" value="حفظ" class="form-control mx-3 btn-outline-success border-2"
                        id="inputZip">
                </div>
            </form>
        </div>
        <div class="card mt-1">
            <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

            </div>

            <div class="card-body">





            </div>
        </div>
        <div class="card mt-1">
            <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

            </div>

            <div class="card-body">



                <div class="form-row">





                    <div class="form-group col-md-2">
                        <label for="inputZip"> مجموع المواد المساعدة</label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip"> مجموع الايادي العاملة</label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">مجموع الموادالمساعدة/الايادي </label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">التوقع للمواد </label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">ت/الايادي العاملة</label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">المجموع </label>
                        <input type="text" class="form-control" id="inputZip" readonly>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">صافي التكاليف </label>
                        <input type="text" class="form-control net" id="inputZip" readonly>
                    </div>
                </div>

            </div>

            </form>






            {{-- modal for insert items --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-header"
                                style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                            </div>

                            <div class="card-body">
                                <form action="{{ route('item') }}" method="POST" class="form-inlineform-row"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
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
                                        <div class=" {{ $errors->has('id') ? 'has-error' : '' }}">
                                            <label for="qoutation_date">المرجع*</label>
                                            <input type="text" id="id" name="refrence" class="form-control"
                                                value="{{ old('refrence') }}" required>
                                            @if ($errors->has('refrence'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('refrence') }}
                                                </em>
                                            @endif

                                        </div>

                                        {{--  customer --}}
                                        <div class=" {{ $errors->has('customer') ? 'has-error' : '' }}"
                                            style="border-radius: 50%;border:1px">
                                            <span style="border-radius: 3rem">
                                            </span>
                                        </div>
                                        <div class=" {{ $errors->has('customer') ? 'has-error' : '' }}">
                                            <label for="qoutation_date">العميل*</label>
                                            <input type="text" id="customer" name="customer" class="form-control"
                                                value="{{ old('customer') }}" required>
                                            @if ($errors->has('customer'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('customer') }}
                                                </em>
                                            @endif

                                        </div>


                                        <div class=" {{ $errors->has('customer') ? 'has-error' : '' }}"
                                            style="border-radius: 50%;border:1px">
                                            <span style="border-radius: 3rem">
                                            </span>
                                        </div>
                                        <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                            <label for="line_catogery">التصنيف</label>


                                            <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                                name="catogery">
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


                                        <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                            <label for="line_catogery">النوع</label>


                                            <select class="form-control" id="exampleFormControlSelect1 main_catog"
                                                name="type">
                                                <option selected value="">-- إختر --</option>
                                                @foreach ($type as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>



                                            @if ($errors->has('main_line'))
                                                <em class="invalid-feedback">
                                                    {{ $errors->first('main_line') }}
                                                </em>
                                            @endif


                                        </div>
                                        <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
                                            <label for="line_catogery" class="m-1">المقاس</label>
                                            <div class=" {{ $errors->has('price') ? 'has-error' : '' }}">
                                                <div class="form-row">
                                                    <input type="text" id="price" name="size_number"
                                                        class="form-control col-8" value="{{ old('price') }}" required>
                                                    @if ($errors->has('price'))
                                                        <em class="invalid-feedback">
                                                            {{ $errors->first('price') }}
                                                        </em>
                                                    @endif
                                                    <select class="form-control col-4"
                                                        id="exampleFormControlSelect1 main_catog" name="size">
                                                        <option selected value="">-- إختر --</option>
                                                        @foreach ($size as $item)
                                                            <option value="{{ $item->id }}">{{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>
                                        </div>

                                        @if ($errors->has('main_line'))
                                            <em class="invalid-feedback">
                                                {{ $errors->first('main_line') }}
                                            </em>
                                        @endif


                                    </div>
                                    <div class=" {{ $errors->has('line_catogery') ? 'has-error' : '' }}">
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

                                    <hr>

                            </div>
                            <div>

                                <input class="btn btn-primary" style="" type="submit" value="حفظ">
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header" style="background-color:#433483a3  ;color:#e6e4eca3 ; font-size:1rem">

                    </div>

                    <div class="card-body">
                        <form action="{{ url('brand/update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">
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
                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="formupdate">
                                <input type="hidden" id="id" name="id" class="form-control"
                                    value="{{ old('name', isset($user) ? $user->name : '') }}" required>

                                <label for="name">الشركة الصنعة*</label>
                                <input type="text" id="company" name="company" class="form-control"
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

                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"
                                style="border-radius: 50%;border:1px">
                                <span style="border-radius: 3rem">
                                </span>
                            </div>
                            <hr>
                            <div>

                                <input class="btn btn-primary" style="" type="submit" value="حفظ">
                            </div>
                        </form>


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
                            هل تريد مسح الخدمة؟
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
                            <form action="{{ url('brand/delete') }}" method="POST" enctype="multipart/form-data">
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
        $(document).ready(function() {

            console.log("true");
            var all_material = 0
            $(".btn-line").click(function(e) {
                e.preventDefault();
                // console.log("true");
                $(".line_data#" + this.id).append(
                    `<tr>
                                            <td width="10">
                                                #
                                            </td>

                                            <td style="text-align: center">
                                                <select  class='form-control products' id="{{ $item->id }}"
                                                    name="item[{{ $item->id }}][]">
                                                    <option selected value="">-- إختر --</option>
                                                    @foreach ($items as $product) <option value="{{ $product->id }}">{{ $product->name }} <span id="{{ $product->id }}">{{ $product->price }}</span></option>@endforeach</select></td><td style="text-align: center"><input type="text" name="units[{{ $item->id }}][]" id=""></td><td style="text-align: center"> <input type="text" name="factor_price[{{ $item->id }}][]"  class='factor_price' readonly id="{{ $item }}[]">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="qty[{{ $item->id }}][]"  class='qty'
                                                    id="{{ $item }}[]">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="simetot[{{ $item->id }}][]" readonly
                                                     class='simetot'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material[{{ $item->id }}][]"
                                                     class='material'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_acc[{{ $item->id }}][]"
                                                    value="0" id=""  class='material_acc'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_other[{{ $item->id }}][]"
                                                    value="0" id=""  class='material_other'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="" readonly  class='tot_material'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="" readonly  class='all_material'>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="labour[{{ $item->id }}][]"
                                                    id=""  class='labour'>
                                            </td>


                                            <td style="text-align: center">

                                                <input type="text" name="labour_other[{{ $item->id }}][]"
                                                    id=""  class='labour_other'>
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id=""  class='tot_labour'>
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id=""  class='all_labour' readonly>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="hole_tot[{{ $item->id }}][]"
                                                    id=""  class='all_tot' readonly>

                                            </td>
                                            <td style="text-align: center">
                                                &emsp;

                                            </td>
                                        </tr>
`
                ).ready(function() {

                    $(".products").change(function() {
                        var factor = $(".factor").val()
                        var tot = 0;
                        var product = 0;
                       var qty= $(this).parent().parent().find(".qty").val();
                        product = $(this).parent().parent().find("select").val()
                        tot = $(this).val() * $(".factor").val();
                        console.log(tot);
                        $(this).parent().parent().find(".factor_price").val('');
                        $(this).parent().parent().find(".factor_price").val(tot);
                        var tot_product = qty * $(this).val();
                        $(this).parent().parent().find(".simetot").val(tot_product);
                        net= $(this).parent().parent().find(".simetot").val();
                         $(this).parent().parent().find(".net").val()
                    })





                    $(".qty").keyup(function(e) {
                        sumations();
                        var product_factor = $(this).parent().parent().find(".factor_price")
                            .val()
                        var tot = product_factor * $(this).val();

                        $(this).parent().parent().find(".hole_tot").val('');
                        // console.log($(this).parent().parent().find(".factor_price").val(tot));
                        $(this).parent().parent().find(".simetot").val(tot);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))

                    })




                    $(".material").keyup(function(e) {

                        var material_acc = $(this).parent().parent().find(".material_acc")
                            .val()
                        var material_other = $(this).parent().parent().find(
                            ".material_other").val()
                        var tot_material = parseInt($(this).val()) + parseInt($(this)
                                .parent().parent().find(".material_other").val()) +
                            parseInt($(this).parent().parent().find(".material_other")
                            .val())
                        console.log(tot_material);


                        $(this).parent().parent().find(".tot_material").val(tot_material);
                        var qty = $(this).parent().parent().find(".qty").val();
                        var all_material = $(this).parent().parent().find(".all_material")
                            .val(tot_material * qty);
                        // console.log(qty*tot_material);

                        // var tot_material = $(this).parent().parent().find(".tot_material").val(tot);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))
                    })


                    $(".material_acc").keyup(function(e) {

                        var material = $(this).parent().parent().find(".material").val()
                        var material_other = $(this).parent().parent().find(
                            ".material_other").val()
                        var tot_material = parseInt($(this).val()) + parseInt(material) +
                            parseInt(material_other)
                        // $(this).parent().parent().find(".simetot").val('');
                        console.log(tot_material);
                        var qty = $(this).parent().parent().find(".qty").val();
                        var all_material = $(this).parent().parent().find(".all_material")
                            .val(tot_material * qty);
                        console.log($(this).parent().parent().find(".tot_material").val(
                            tot_material));
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))

                    })



                    // material_other
                    $(".material_other").keyup(function(e) {

                        var material = $(this).parent().parent().find(".material").val()
                        var material_acc = $(this).parent().parent().find(".material_acc")
                            .val()
                        var tot_material = parseInt($(this).val()) + parseInt(
                            material_acc) + parseInt(material)
                        // $(this).parent().parent().find(".simetot").val('');
                        console.log(tot_material);
                        var qty = $(this).parent().parent().find(".qty").val();
                        var all_material = $(this).parent().parent().find(".all_material")
                            .val(tot_material * qty);
                        console.log($(this).parent().parent().find(".tot_material").val(
                            tot_material));
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))

                    })



                    //labour


                    $(".labour").keyup(function(e) {

                        // var material= $(this).parent().parent().find(".material").val()
                        var labour_other = $(this).parent().parent().find(".labour_other")
                            .val()
                        var tot_labour = parseInt($(this).val()) + parseInt(labour_other)
                        // hole_tot
                        $(this).parent().parent().find(".tot_labour").val(tot_labour)
                        var qty = $(this).parent().parent().find(".qty").val();

                        var all_labour = $(this).parent().parent().find(".all_labour").val(
                            tot_labour * qty);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))
                        console.log(tot_labour);
                        // all_labour



                    })


                    // labour other

                    $(".labour_other").keyup(function(e) {

                        var labour = $(this).parent().parent().find(".labour").val()
                        var tot_labour = parseInt($(this).val()) + parseInt(labour)
                        // hole_tot
                        $(this).parent().parent().find(".tot_labour").val(tot_labour)
                        var qty = $(this).parent().parent().find(".qty").val();

                        $(this).parent().parent().find(".all_labour").val(tot_labour * qty);
                        console.log(tot_labour);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))
                        // all_labour

                    })







                });
            });
            // let hole_tot = 0;
            // // product total
            $(".products").change(function() {
                console.log($('.lines').val());
                var factor = $(".factor").val()
                        var tot = 0;
                        var product = 0;
                       var qty= $(this).parent().parent().find(".qty").val();
                        product = $(this).parent().parent().find("select").val()
                        tot = $(this).val() * $(".factor").val();
                        console.log(tot);
                        $(this).parent().parent().find(".factor_price").val('');
                        $(this).parent().parent().find(".factor_price").val(tot);
                        var tot_product = qty * $(this).val();
                        $(this).parent().parent().find(".simetot").val(tot_product);
                        net= $(this).parent().parent().find(".simetot").val();
                         $(this).parent().parent().find(".net").val()
            })




            $(".qty").keyup(function(e) {

                sumations();
                        var product_factor = $(this).parent().parent().find(".factor_price")
                            .val()
                        var tot = product_factor * $(this).val();

                        $(this).parent().parent().find(".hole_tot").val('');
                        // console.log($(this).parent().parent().find(".factor_price").val(tot));
                        $(this).parent().parent().find(".simetot").val(tot);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                            .val()) + parseInt($(this).parent().parent().find(
                                ".all_material").val()))

            })


            // // material

            $(".material").keyup(function(e) {

                var material_acc = $(this).parent().parent().find(".material_acc").val()
                var material_other = $(this).parent().parent().find(".material_other").val()
                var tot_material = parseInt($(this).val()) + parseInt($(this).parent().parent().find(
                    ".material_other").val()) + parseInt($(this).parent().parent().find(
                    ".material_other").val())
                console.log(tot_material);


                $(this).parent().parent().find(".tot_material").val(tot_material);
                var qty = $(this).parent().parent().find(".qty").val();
                var all_material = $(this).parent().parent().find(".all_material").val(tot_material * qty);
                // console.log(qty*tot_material);

                // var tot_material = $(this).parent().parent().find(".tot_material").val(tot);
                var all_tot = $(this).parent().parent().find(".all_tot").val(parseInt($(this).parent()
                    .parent().find(".all_labour").val()) + parseInt($(this).parent().parent().find(
                    ".all_material").val()))
            })

            // material Acssories

            $(".material_acc").keyup(function(e) {

                var material = $(this).parent().parent().find(".material").val()
                var material_other = $(this).parent().parent().find(".material_other").val()
                var tot_material = parseInt($(this).val()) + parseInt(material) + parseInt(material_other)
                $(this).parent().parent().find(".simetot").val('');
                console.log(tot_material);
                var qty = $(this).parent().parent().find(".qty").val();
                var all_material = $(this).parent().parent().find(".all_material").val(tot_material * qty);
                console.log($(this).parent().parent().find(".tot_material").val(tot_material));
                var all_tot = $(this).parent().parent().find(".all_tot").val(parseInt($(this).parent()
                    .parent().find(".all_labour").val()) + parseInt($(this).parent().parent().find(
                    ".all_material").val()))

            })



            // material_other
            $(".material_other").keyup(function(e) {

                var material = $(this).parent().parent().find(".material").val()
                var material_acc = $(this).parent().parent().find(".material_acc").val()
                var tot_material = parseInt($(this).val()) + parseInt(material_acc) + parseInt(material)
                $(this).parent().parent().find(".simetot").val('');
                console.log(tot_material);
                var qty = $(this).parent().parent().find(".qty").val();
                var all_material = $(this).parent().parent().find(".all_material").val(tot_material * qty);
                console.log($(this).parent().parent().find(".tot_material").val(tot_material));
                var all_tot = $(this).parent().parent().find(".all_tot").val(parseInt($(this).parent()
                    .parent().find(".all_labour").val()) + parseInt($(this).parent().parent().find(
                    ".all_material").val()))

            })



            //labour


            $(".labour").keyup(function(e) {

                // var material= $(this).parent().parent().find(".material").val()
                var labour_other = $(this).parent().parent().find(".labour_other").val()
                var tot_labour = parseInt($(this).val()) + parseInt(labour_other)
                // hole_tot
                $(this).parent().parent().find(".tot_labour").val(tot_labour)
                var qty = $(this).parent().parent().find(".qty").val();

                var all_labour = $(this).parent().parent().find(".all_labour").val(tot_labour * qty);
                var all_tot = $(this).parent().parent().find(".all_tot").val(parseInt($(this).parent()
                    .parent().find(".all_labour").val()) + parseInt($(this).parent().parent().find(
                    ".all_material").val()))
                console.log(tot_labour);
                // all_labour



            })


            // labour other

            $(".labour_other").keyup(function(e) {

                var labour = $(this).parent().parent().find(".labour").val()
                var tot_labour = parseInt($(this).val()) + parseInt(labour)
                // hole_tot
                $(this).parent().parent().find(".tot_labour").val(tot_labour)
                var qty = $(this).parent().parent().find(".qty").val();

                $(this).parent().parent().find(".all_labour").val(tot_labour * qty);
                console.log(tot_labour);
                var all_tot = $(this).parent().parent().find(".all_tot").val(parseInt($(this).parent()
                    .parent().find(".all_labour").val()) + parseInt($(this).parent().parent().find(
                    ".all_material").val()))
                // all_labour

            })


            function sumations() {
                var sum = 0;
                $(".all_tot").each(function() {
                    sum += parseInt($(this).val());
                });
                console.log(sum);
            }


















            //             $(".material").keyup(function(e){
            //   var product= $(this).parent().parent().find("select").val()
            //   $(this).parent().parent().find(".tot_material").val( product * $(this).val());
            //             })
            //             $(".material").keyup(function(e){
            //   var product= $(this).parent().parent().find("select").val()
            //   $(this).parent().parent().find(".tot_material").val( product * $(this).val());
            //             })
            //             $(".material").keyup(function(e){
            //   var product= $(this).parent().parent().find("select").val()
            //   $(this).parent().parent().find(".tot_material").val( product * $(this).val());
            //             })
            // $('.new_item').click(function() {
            //     $('#exampleModal').modal('show');
            // })

            // $('.customer').change(function() {
            //     console.log(this.value);
            //     var custom = this.value;
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $.ajax({
            //         type: 'GET',
            //         url: 'http://127.0.0.1:8000/customer/data/' + custom,
            //         //   data : ({id : $(this).value}),
            //         dataType: 'JSON',
            //         success: function(response) {
            //             console.log(response);
            //             $('.customer_data').html(
            //                 `<td> name</td>` + data.name + `</td><td>رقم الهاتف</td><td>` +
            //                 data.phone_number + `</td><td></td><td>` + data.id + `</td>`



            //             )
            //         }

        });





        // })


        // });
    </script>
@endsection


@endsection