@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card"  style="font-size: 16px;  font-family: 'Cairo', sans-serif; font-weight: bold">
        <div class="card-header">
            <h5>اضافة جهاز عطل</h5>
        </div>
        <form class="form theme-form"  action="{{ route('moble.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm26"> اسم الزبون </label>
                            <input style="font-weight: bold" name="nameperson" class="form-control form-control-lg" id="colFormLabelSm26" type="text" placeholder="ادخل اسم الزبون" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword27">رقم الهاتف</label>
                            <input style="font-weight: bold" name="numberperson" class="form-control" id="exampleInputPassword27" type="number" placeholder="ادخل رقم الهاتف" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">نوع الجهاز </label>
                            <input style="font-weight: bold" name="typedev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل نوع الجهاز" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">لون الجهاز </label>
                            <input style="font-weight: bold" name="colordev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل لون نوع الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28">نوع العطل  </label>
                            <input name="typedisply" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل نوع العطل" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> كلفة الصيانة</label>
                            <input style="font-weight: bold"  name="priscall" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل كلفة الصيانة" data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> حالة الجهاز </label>
                            <input style="font-weight: bold"  name="stutstype" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل   حالة الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> ملحقات الجهاز  </label>
                            <input style="font-weight: bold" name="cassdev" class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل  ملحقات الجهاز " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="col-form-label-sm" for="colFormLabelSm28"> اسم  المستلم  </label>
                            <input  style="font-weight: bold" name="namegiv"  class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="ادخل اسم  المستلم " data-bs-original-title="" title="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label  class="col-form-label-sm" for="colFormLabelSm28">تاريخ الاستلام</label>
                            <input style="font-weight: bold"  name="timegiv" class="datepicker-here form-control digits" type="text" data-language="en" data-bs-original-title="" title="" placeholder="ادخل تاريخ الاستلام">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">ارسال</button>
                <input class="btn btn-light" type="reset" value="تفريغ" data-bs-original-title="" title="">
            </div>
        </form>
    </div>
</div>
@endsection
