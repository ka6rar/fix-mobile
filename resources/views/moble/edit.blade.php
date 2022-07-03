@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card"  style="font-size: 16px;  font-family: 'Cairo', sans-serif; font-weight: bold">
        <div class="card-header">
            <h5>اضافة جهاز عطل</h5>
        </div>
        <form class="form theme-form"  action="{{ route('moble.update', ['id' => $moblie->id]  ) }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm26"> اسم الزبون </label>
                            <input   value="{{$moblie->nameperson}}" style="font-weight: bold" name="nameperson" class="form-control form-control-lg" id="colFormLabelSm26" type="text" placeholder="ادخل اسم الزبون" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword27">رقم الهاتف</label>
                            <input value="{{$moblie->numberperson}}"  style="font-weight: bold" name="numberperson" class="form-control" id="exampleInputPassword27" type="number" placeholder="ادخل رقم الهاتف" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">نوع الجهاز </label>
                            <input value="{{$moblie->typedev}}"   style="font-weight: bold" name="typedev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل نوع الجهاز" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">لون الجهاز </label>
                            <input value="{{$moblie->colordev}}"   style="font-weight: bold" name="colordev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل لون نوع الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">نوع العطل  </label>
                            <input  value="{{$moblie->typedisply}}"  name="typedisply" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل نوع العطل" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> كلفة الصيانة</label>
                            <input value="{{$moblie->priscall}}"  style="font-weight: bold"  name="priscall" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل كلفة الصيانة" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> حالة الجهاز </label>
                            <input  value="{{$moblie->stutstype}}"   style="font-weight: bold"  name="stutstype" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل   حالة الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> ملحقات الجهاز  </label>
                            <input   value="{{$moblie->cassdev}}"  style="font-weight: bold" name="cassdev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل  ملحقات الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> اسم  المستلم  </label>
                            <input   value="{{$moblie->namegiv}}" style="font-weight: bold" name="namegiv"  class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل اسم  المستلم " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label  class="col-form-label-sm" for="colFormLabelSm28">تاريخ الاستلام</label>
                            <input value="{{$moblie->timegiv}}"   style="font-weight: bold"  name="timegiv" class="datepicker-here form-control digits" type="text" data-language="en" data-bs-original-title="" title="" placeholder="ادخل تاريخ الاستلام">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlSelect9">حالة الجهاز   في الشركة</label>
                    <select name="status" class="form-select digits" id="exampleFormControlSelect9">
                        <option  value="قيد الانتظار">قيد الانتظار</option>
                        <option  value="تم صلاحة">تم صلاحة</option>
                        <option  value="قطع غير متوفرة">قطع غير متوفرة</option>
                        <option  value="مسترد من قبل الزبون" >مسترد من قبل الزبون</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label  class="col-form-label-sm" for="colFormLabelSm28">ملاحظة</label>
                            <textarea   style="font-weight: bold"  name="note" class="datepicker-here form-control digits" type="text"  >{{$moblie->note}}</textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">تحديث</button>
            </div>
        </form>
        <br/>
        @if(count($errors->all()) > 0)
        <div class="alert alert-default text-danger">
            <ul>
                @foreach($errors->all() as $error)
                <br/>
                 <li>{{ $error }}</li>
                 <br/>
                @endforeach
            </ul>
        </div>
       @endif
    </div>

@endsection
