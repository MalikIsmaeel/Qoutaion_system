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
                                <div class="">

                                    <input type="checkbox" class="lines" name="lines[]" value="{{ $item->id }}"
                                        id="">
                                    <label class="" for="">
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
                                    <tbody class="line_data" id="{{ $item->id }}">

                                        <tr>
                                            <td width="10">
                                                #
                                            </td>

                                            <td style="text-align: center">
                                                <select class="form-control products" id="{{ $item->id }}"
                                                    name="item[{{ $item->id }}][]" required>
                                                    <option selected value="">-- إختر --</option>
                                                    @foreach ($items as $product)
                                                        <option value="{{ $product->id }}"
                                                            data-price="{{ $product->price }}">{{ $product->name }} <span
                                                                id="{{ $product->id }}">{{ $product->price }}</span>
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input type="text" name="" class="product-price" readonly
                                                    id="{{ $item->id }}">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="units[{{ $item->id }}]" id=""
                                                    class="border border-1 border border-1">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="factor_price[{{ $item->id }}][]"
                                                    class="border border-1 factor_price" readonly
                                                    id="{{ $item->id }}">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="qty[{{ $item->id }}][]"
                                                    class="border border-1 qty" id="{{ $item->id }}" value="0"
                                                    required>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="simetot[{{ $item->id }}][]" readonly
                                                    id="{{ $item->id }}" value="0"
                                                    class="border border-1 simetot">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0"
                                                    class="border border-1 material" required>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_acc[{{ $item->id }}][]"
                                                    value="0" id="{{ $item->id }}"
                                                    class="border border-1 material_acc" required>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_other[{{ $item->id }}][]"
                                                    value="0" id="{{ $item->id }}"
                                                    class="border border-1 material_other" required>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" readonly
                                                    class="border border-1 tot_material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" readonly
                                                    class=" border border-1 all_material" value="0">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="labour[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0"
                                                    class="border border-1 labour" required>
                                            </td>


                                            <td style="text-align: center">

                                                <input type="text" name="labour_other[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0"
                                                    class=" border border-1 labour_other" required>
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="" class=" border border-1 tot_labour" value="0"
                                                    readonly required>
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0"
                                                    class=" border border-1 all_labour" readonly>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="hole_tot[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0"
                                                    class=" border border-1 all_tot" readonly>

                                            </td>
                                            <td style="text-align: center">
                                                &emsp;

                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                                {{-- <input type="text" name="hole_tot[{{ $item->id }}][]" id="{{ $item->id }}"
                                    value="0" class="totals border border-1" readonly> --}}
                            </div>
                            <div class="form-group col-md-2 justify-center">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="submit" value="إضافة" class="form-control btn-bd-primary btn-line"
                                    id="{{ $item->id }}">
                            </div>
                            <div class="form-group col-md-2 justify-center d-none">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="text" name="total[]" id="{{ $item->id }}"
                                    class="total border border-1 d-none" readonly>
                            </div>
                            <div class="form-group col-md-2 justify-center d-none">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="text" name="total[]" id="{{ $item->id }}"
                                    class="total_material border d-none border-1" readonly>
                            </div>
                            <div class="form-group col-md-2 justify-center d-none">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="text" name="total[]" id="{{ $item->id }}"
                                    class="total_labour border d-none border-1" readonly>
                            </div>
                            <div class="form-group col-md-2 justify-center d-none">
                                <label for="inputZip"> &emsp14; </label>
                                <input type="text" name="total[]" id="{{ $item->id }}"
                                    class="total_profit d-none border d-none border-1" readonly>
                            </div>
                            <div class="form-group col-md-2 justify-center d-none">
                                <label for="inputZip"> &emsp14; </label>
                                <button class="btn btn-sm btn-bd-primary" onclick=" sumations($(this));">حساب</button>
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

                <div class="table-responsive">


                    <table class=" table table-bordered   overflow-x-scroll" style="text-align: center">
                        <thead class=" overflow-x-scroll bg-blue-50">
                            <tr class=" overflow-x-scroll">
                                <th width="10">
                                    #
                                </th>

                                <th style="text-align: center">

                                    النظام </th>

                                <th style="text-align: center">
                                    المجموع المواد/الكلي</th>


                                <th style="text-align: center">
                                    الايادي العاملة/الكلي</th>
                                <th style="text-align: center">
                                    مجموع التكلفة الكلية </th>
                                <th style="text-align: center">
                                    factor </th>
                                <th style="text-align: center">
                                    سعر البيع </th>
                                &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody class="summary">
                            <?php $i = 1; ?>
                            @foreach ($line as $item)
                                <tr>
                                    <td width="10">
                                        {{ $i++ }}
                                    </td>

                                    <td style="text-align: center">
                                        {{ $item->name }}

                                    <td style="text-align: center">

                                        <input type="text" name="tot_material[{{ $item->id }}][]"
                                            id="{{ $item->id }}" readonly class="all_material_summary"
                                            value="0">
                                    </td>

                                    <td style="text-align: center">


                                        <input type="text" name="worker_tot[{{ $item->id }}][]"
                                            id="{{ $item->id }}" value="0" class="all_labour_summary" readonly>
                                    </td>
                                    <td style="text-align: center">

                                        <input type="text" name="hole_tot[{{ $item->id }}][]"
                                            id="{{ $item->id }}" value="0" class="all_tot_summary" readonly>

                                    </td>
                                    <td style="text-align: center">

                                        <input type="text" name="hole_tot[{{ $item->id }}][]"
                                            id="{{ $item->id }}" value="0" class="factor_summary" readonly>

                                    </td>
                                    <td style="text-align: center">

                                        <input type="text" name="hole_tot[{{ $item->id }}][]"
                                            id="{{ $item->id }}" value="0" class="sale_factor_summary"
                                            readonly>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <td width="10">
                                    &emsp;
                                </td>

                                <td style="text-align: center">
                                    المجموع

                                <td style="text-align: center">

                                    <input type="text" name="" id="" readonly
                                        class="all_material_summary1" value="0">
                                </td>

                                <td style="text-align: center">


                                    <input type="text" name="" id="" value="0"
                                        class="all_labour_summary1" readonly>
                                </td>
                                <td style="text-align: center">

                                    <input type="text" name="" id="" value="0"
                                        class="all_tot_summary1" readonly>

                                </td>
                                <td style="text-align: center">

                                    <input type="text" name="" id="{{ $item->id }}" value="0"
                                        class="factor_summary1" readonly>

                                </td>
                                <td style="text-align: center">

                                    <input type="text" name="hole_tot[{{ $item->id }}][]"
                                        id="{{ $item->id }}" value="0" class="sale_factor_summary1" readonly>

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    {{-- <input type="text" name="hole_tot[{{ $item->id }}][]" id="{{ $item->id }}"
                        value="0" class="totals border border-1" readonly> --}}
                </div>



            </div>
        </div>
        <div class="card mt-1">
            <div class="card-header" style="background-color: #433483a3 ; color:aliceblue">

            </div>

            <div class="card-body breif">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-md-center">التكاليف غير المباشرة</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  col-3 indrect-cost" id="inputtext" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext" class="col-sm-2 col-form-label text-md-center">تكاليف المقاولين بالباطن</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  col-3 consult" id="inputtext" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-md-center">تكاليف إضافية</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-3 addition-cost" id="inputtext" placeholder="">
                    </div>

                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-md-center">المخاطر </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-3 resk" id="inputtext" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label text-md-center">التكلفة الكلية </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-3 total-cost" id="inputtext" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext" class="col-sm-2 col-form-label text-md-center">سعر البيع </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-3 sale_profit" id="inputtext" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputtext" class="col-sm-2 col-form-label text-md-center"> الربح</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control col-3" id="inputtext" placeholder="">
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
            let all_line = {};
            let sum_material = 0;
            line_detect()
            $(".lines").change(function() {
                line_detect();

            })


            $(".btn-line").click(function(e) {
                e.preventDefault();


                $(".line_data#" + this.id).append(
                    `
                    <tr>
                                            <td width="10">
                                                #
                                            </td>

                                            <td style="text-align: center">
                                                <select class="form-control products" id="{{ $item->id }}"
                                                    name="item[{{ $item->id }}][]" required>
                                                    <option selected value="">-- إختر --</option>
                                                    @foreach ($items as $product)
                                                        <option value="{{ $product->id }}"
                                                            data-price="{{ $product->price }}">{{ $product->name }} <span
                                                                id="{{ $product->id }}">{{ $product->price }}</span>
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="units[{{ $item->id }}]" id=""
                                                    class=" border border-1 border border-1">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="factor_price[{{ $item->id }}][]"
                                                    class=" border border-1 factor_price" readonly id="{{ $item->id }}">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="qty[{{ $item->id }}][]" class=" border border-1 qty"
                                                    id="{{ $item->id }}" value="0">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="[{{ $item->id }}][]" readonly
                                                    id="{{ $item->id }}" value="0" class=" border border-1 simetot">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" class=" border border-1 material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_acc[{{ $item->id }}][]"
                                                    value="0" id="{{ $item->id }}" class=" border border-1 material_acc">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="material_other[{{ $item->id }}][]"
                                                    value="0" id="{{ $item->id }}" class=" border border-1 material_other">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" readonly
                                                    class=" border border-1 tot_material">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="tot_material[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" readonly class=" border border-1 all_material" value="0">
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="labour[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" class=" border border-1 labour">
                                            </td>


                                            <td style="text-align: center">

                                                <input type="text" name="labour_other[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" class=" border border-1 labour_other">
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="" class=" border border-1 tot_labour" value="0" readonly>
                                            </td>
                                            <td style="text-align: center">


                                                <input type="text" name="worker_tot[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" class=" border border-1 all_labour" readonly>
                                            </td>
                                            <td style="text-align: center">

                                                <input type="text" name="hole_tot[{{ $item->id }}][]"
                                                    id="{{ $item->id }}" value="0" class=" border border-1 all_tot" readonly>

                                            </td>
                                            <td style="text-align: center">
                                                &emsp;

                                            </td>
                                        </tr>`).ready(function() {









                    // // material









                    // let hole_tot = 0;
                    // // product total
                    $(".products").change(function() {


                        sum_product($(this))
                    })




                    $(".qty").keyup(function(e) {


                        var all_labour = parseInt($(this).parent().parent().find(
                            ".all_labour")) || 0;
                        $(this).parent().parent().find(".hole_tot").val('');

                        // $(this).parent().parent().find(".simetot").val(tot);
                        var all_tot = $(this).parent().parent().find(".all_tot").val(
                            parseInt($(this).parent().parent().find(".all_labour")
                                .val() || 0) + parseInt($(this).parent().parent().find(
                                ".all_material").val() || 0))

                        // sumations_profit($(this));

                        sumations($(this));

                        //  here fire the profit

                        sumation_all_tot();

                        sum_product($(this))
                        total_sale_factor($(this))


                    })


                    // // material m

                    $(".material").keyup(function(e) {
                        materials_sumation($(this))
                        sumation_all_material($(this))

                        sumations($(this));
                        sumation_all_tot();
                    })

                    // material Acssories

                    $(".material_acc").keyup(function(e) {

                        materials_sumation($(this))

                        sumation_all_material($(this))

                        sumations($(this));
                        sumation_all_tot();
                    })



                    // material_other
                    $(".material_other").keyup(function(e) {

                        materials_sumation($(this))
                        sumation_all_material($(this))
                        // sumation_all_materials();
                        sumations($(this));
                        line_detect()
                        sumation_all_tot();
                    })



                    //labour


                    $(".labour").keyup(function(e) {

                        // var material= $(this).parent().parent().find(".material").val()
                        labour_sumation($(this))

                        // all_labour
                        sumation_all_labour($(this));
                        // sumation_all_labour1($(this));
                        sumations($(this))
                        sumation_all_tot();
                    })


                    // labour other

                    $(".labour_other").keyup(function(e) {
                        labour_sumation($(this))
                        //
                        sumation_all($(this))
                        sumation_all_labour($(this));
                        total_sale_factor($(this))
                        sumations($(this))
                        line_detect()
                        sumation_all_tot();
                        // sumation_all_labour1($(this));
                    })






                });
                line_detect()
            });





            // let hole_tot = 0;
            // // product total
            $(".products").change(function() {

                var factor = $(".factor").val() || 0
                var tot = 0;
                var product = 0;
                var qty = $(this).parent().parent().find(".qty").val() || 0;
                product = $(this).parent().parent().find("select").val() || 0
                tot = product * $(".factor").val() * qty;
                $(this).parent().parent().find(".factor_price").val('');
                $(this).parent().parent().find(".factor_price").val(tot);
                var tot_product = qty * $(this).val();
                $(this).parent().parent().find(".simetot").val(tot_product);
                net = $(this).parent().parent().find(".simetot").val();
                $(this).parent().parent().find(".net").val()
                sum_product($(this))
                sumation_all_tot();
            })




            $(".qty").keyup(function(e) {

                var product_factor = $(this).parent().parent().find(".factor_price")
                    .val()
                var tot = product_factor * $(this).val();

                $(this).parent().parent().find(".hole_tot").val('');

                $(this).parent().parent().find(".simetot").val(tot);
                var all_tot = $(this).parent().parent().find(".all_tot").val(
                    parseInt($(this).parent().parent().find(".all_labour")
                        .val()) + parseInt($(this).parent().parent().find(
                        ".all_material").val()))

                // sumations_profit($(this));

                sumations($(this));

                //  here fire the profit

                sumation_all_tot();

                sum_product($(this))

                total_sale_factor($(this))

            })


            // // material daim main

            $(".material").keyup(function(e) {
                materials_sumation($(this))
                sumation_all_material($(this))
                // sumation_all_materials()
                sumations($(this));
                sumation_all_tot();
            })

            // material Acssories

            $(".material_acc").keyup(function(e) {

                materials_sumation($(this))

                sumation_all_material($(this))
                // sumation_all_materials()
                sumations($(this));
                sumation_all_tot();
            })



            // material_other
            $(".material_other").keyup(function(e) {

                materials_sumation($(this))
                sumation_all_material($(this))
                // sumation_all_materials()
                sumations($(this));
                line_detect()
                // sumation_all_materials()
                sumation_all_tot();
            })



            //labour


            $(".labour").keyup(function(e) {

                labour_sumation($(this))


                // all_labour
                sumation_all_labour($(this));
                // sumation_all_labour1($(this));
                // sumations($(this))
                sumation_all_tot();

            })


            // labour other

            $(".labour_other").keyup(function(e) {

                labour_sumation($(this))
                sumation_all($(this))
                sumation_all_labour($(this));
                total_sale_factor($(this))
                // sumations($(this))
                line_detect()
                // sumation_all_labour1($(this));
                sumation_all_tot();
                all_tot($(this))
            })

            function sumations(parent) {
                // all_line[id]-0;
                var sum = 0;

                var id = parent.attr("id")
                all_line[id] = 0;
                console.log("sumation " + id);
                parent.closest(".line_data").each(function() {
                    $(this).find(".all_tot").each(function() {

                        all_line[id] += parseInt($(this).val())
                        $(this).closest(".card-body").find("input.total").val(isNaN(all_line[id]))

                    })
                    $("input.profit").val(sum)
                })



            }
            var summ = 0;

            function sumation_all_material(parent) {
                // all_line[id]-0;


                var id = parent.attr("id")

                parent.closest(".line_data").each(function() {
                    $(this).find(".all_material").each(function() {

                        all_line[id] += parseInt($(this).val() || 0)
                        $(this).closest(".card-body").find("input.total_material").val(all_line[id])
                        $("#" + id + ".all_material_summary").val(isNaN(all_line[id]))

                    })


                    $("input.profit").val(sum)
                })

                var sum = 0;
                sumation_all_materials();
            }


            function sumation_all_labour(parent) {
                // all_line[id]-0;


                var id = parent.attr("id")
                all_line[id] = 0;
                parent.closest(".line_data").each(function() {
                    $(this).find(".all_labour").each(function() {

                        all_line[id] += parseInt($(this).val() || 0)
                        $(this).closest(".card-body").find("input.total_labour").val(all_line[id])
                        $("#" + id + ".all_labour_summary").val(all_line[id])
                    })

                })

                sumation_all(parent)
                sumation_all_labours()
            }





            function line_detect() {
                $(".lines").each(function() {
                    all_line[this.value] = 0;

                    if (this.checked) {

                        // $(this).parent().parent().find('table').css('visibility', 'visible').fadeIn(50000);
                        $(this).parent().parent().find('table input').prop('disabled', false);
                        // sumations(this.value,0);
                        $(this).parent().parent().find('table select').prop('disabled', false);
                    } else {
                        all_line[this.value] = 0;
                        $(this).parent().parent().find('table input').prop('disabled', true);
                        $(this).parent().parent().find('table select').prop('disabled', true);
                        // $(this).parent().parent().find('table').css('visibility', 'hidden').fadeIn(50000);
                    }
                })
            }


            function sum_product(parent) {


                var sum = 0;

                var id = parent.attr("id")

                all_line[id] = 0;
                var qty = [];
                var product = [];

                parent.closest(".line_data").each(function() {

                    $(this).find("select.products option:selected").each(function(index) {
                        product[index] = $(this).data("price") || 0

                    })





                    $(this).children().find(".qty").each(function(index) {
                        qty[index] = $(this).val() || 0


                    })
                    var factor = $('.factor').val() || 0;
                    $(this).find("#" + id + ".factor_price").each(function(index) {
                        $(this).val(product[index] * factor)
                    })
                    $(this).find("#" + id + ".simetot").each(function(index) {
                        $(this).val(qty[index] * product[index] * factor)

                        sum_profit(id)

                    })
                })

            }

            function sum_profit(id) {


                var sum = 0;




                $(".line_data").each(function() {


                    $(this).find("#" + id + ".simetot").each(function() {

                        sum += parseInt($(this).val() || 0);
                        $("#" + id + ".total_profit").val(sum)
                    })

                })

            }
            sumation_all($(".tot"))

            $(this).find('input:text').val('');
            $(this).find('select').val('');


            function sumation_all(parent) {
                // all_line[id]-0;
                var sum = 0;

                var id = parent.attr("id")
                all_line[id] = 0;

                parent.closest(".line_data").each(function() {
                    $(this).find("#" + id + ".all_tot").each(function() {

                        all_line[id] += parseInt(($(this).val()) || 0)

                        // $(this).closest(".card-body").find("#"+id+"input.all_tot_summary").val(all_line[id])
                        $("#" + id + ".total").val(all_line[id])
                        $("#" + id + ".all_tot_summary").val(all_line[id]);
                        $("#" + id + "input.all_tot_summary").val($("#" + id + ".total").val())
                    })

                })



            }


            function sumation_all(parent) {
                // all_line[id]-0;
                var sum = 0;

                var id = parent.attr("id")
                all_line[id] = 0;

                parent.closest(".line_data").each(function() {
                    $(this).find("#" + id + ".all_tot").each(function() {

                        all_line[id] += parseInt($(this).val() || 0)

                        // $(this).closest(".card-body").find("#"+id+"input.all_tot_summary").val(all_line[id])
                        $("#" + id + ".total").val(all_line[id] || 0)
                        $("#" + id + ".all_tot_summary").val(all_line[id] || 0);
                        $("#" + id + "input.all_tot_summary").val($("#" + id + ".total").val() || 0)
                    })
                    total_factor(parent);
                    summary_product_factor();
                })



            }

            function total_factor(parent) {
                // all_line[id]-0;
                var sum = 0;

                var id = parent.attr("id")


                $(".summary").each(function() {
                    $(this).find("#" + id + ".factor_summary").each(function() {


                        $(this).val($(".factor").val());
                        $(".factor_summary1").val($(".factor").val())
                    })

                })



            }

            function total_sale_factor(parent) {
                // all_line[id]-0;
                var sum = 0;



                $("input#" + parent.attr('id') + ".total_profit").each(function() {

                    sum += isNaN(parseInt($(this).val()));
                    console.log(sum);
                    $("input#" + parent.attr('id') + ".sale_factor_summary").val(sum || 0)
                })
                summary_product_factor()


            }

            function summary() {
                var sum = 0;
                $(".summary").each(function() {
                    sum += isNaN(parseInt($(".all_material_summary").val()))
                    $(".all_material_summary").val(sum)
                })
            }

            function isNaN(value) {
                return value || 0;
            }






            let sum = 0;




            function sumation_all_materials() {
                var sum = 0;


                $(".all_material_summary").each(function() {
                    let $el = $(this);
                    sum += parseInt(($el.val() || 0));


                });
                // $('#gross_amount').text(gross.toFixed(2));
                $(".all_material_summary1").val(sum)



            }

            function sumation_all_labours() {
                var sum = 0;


                $(".all_labour_summary").each(function() {
                    let $el = $(this);
                    sum += parseInt(($el.val() || 0));


                });
                // $('#gross_amount').text(gross.toFixed(2));
                $(".all_labour_summary1").val(sum)



            }







            function materials_sumation(parent) {

                if (parent.attr("class") == "border border-1 material_other") {

                    var material = parent.parent().parent().find(".material").val() || 0
                    var material_acc = parent.parent().parent().find(".material_acc").val() || 0
                    var material_other = parent.val() || 0
                } else if (parent.attr("class") == "border border-1 material_acc") {
                    var material_other = parent.parent().parent().find(".material_other").val() || 0
                    var material = parent.parent().parent().find(".material").val() || 0
                    var material_acc = parent.val() || 0
                    console.log(material + " " + material_acc);
                    console.log(parent.attr("class"));
                } else {
                    var material_other = parent.parent().parent().find(".material_other").val() || 0
                    var material_acc = parent.parent().parent().find(".material_acc").val() || 0
                    var material = parent.val() || 0
                }

                tot_material = parseInt(material) + parseInt(material_other) + parseInt(material_acc)


                parent.parent().parent().find(".tot_material").val(tot_material);
                var qty = parent.parent().parent().find(".qty").val() || 0;
                var all_material = parent.parent().parent().find(".all_material").val(tot_material * qty);
                all_tot($(this))


            }

            function all_tot(parent) {
                var all_tot = 0;
                var tot_material = 0;
                var tot_labour = 0;
                tot_material = isNaN(parseInt(parent.parent().parent().find(".tot_material").val()));
                tot_labour = isNaN(parseInt(parent.parent().parent().find(".tot_labour").val()));

                all_tot = isNaN(tot_material) + isNaN(tot_labour)
                parent.parent().parent().find(".all_tot").val(all_tot || 0)
            }






            function labour_sumation(parent) {
                var labour_other = 0;
                var labour = 0;
                if (parent.className == "labour_other") {
                    var labour_other = parent.parent().parent().find(".labour").val() || 0
                    var labour = parent.val() || 0
                } else {
                    var labour_other = parseInt(parent.parent().parent().find(".labour_other").val()) || 0
                    var labour = parseInt(parent.val()) || 0
                }
                var tot_labour = 0;
                tot_labour = parseInt(labour) + parseInt(labour_other)

                console.log(tot_labour);
                parent.parent().parent().find(".tot_labour").val(tot_labour);
                var qty = parent.parent().parent().find(".qty").val() || 0;
                var all_labour = parent.parent().parent().find(".all_labour").val(tot_labour * qty);


                all_tot($(this))
            }

            function summary_product_factor() {
                var sum = 0;
                $(".summary").each(function() {
                    sum += isNaN(parseInt($(".sale_factor_summary").val()))
                    $(".sale_factor_summary1").val(sum)
                })
            }

            function sumation_all_tot() {

                var sum = 0;
                $(".summary").each(function() {
                    $(this).find(".all_tot_summary").each(function() {
                        sum += isNaN(parseInt($(this).val()))
                        console.log();
                    })

                    $(".all_tot_summary1").val(sum)
                })





            }

        $(".indrect-cost").keyup(function (e) {
        e.preventDefault();
        $(".total-cost").val($(".all_tot_summary1").val()*parseInt($(this).val()||0))
        })
        $(".consult-cost").keyup(function (e) {
        e.preventDefault();
var consult=$(".all_tot_summary1").val()*parseInt($(this).val()||0);
var indirect =parseInt($(".total-cost").val())*parseInt( $(".indrect-cost").val()||0)
        $(".total-cost").val( consult * indirect)
        })


            // all_material_summary

            // sale_factor_summary

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
            //
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
            //
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
