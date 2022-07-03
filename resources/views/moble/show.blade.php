@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row" style="font-size: 16px;  font-family: 'Cairo', sans-serif; font-weight: bold" dir="rtl">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>صيانة</h5><span>{{ $moblie->typedev }}</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">تسلسل الزبون</th>
                                    <td>{{ $moblie->id }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">اسم الزبون</th>
                                    <td>{{ $moblie->nameperson }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">رقم الهاتف</th>
                                    <td>{{ $moblie->numberperson }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">نوع الجهاز</th>
                                    <td>{{ $moblie->typedev }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">لون الجهاز</th>
                                    <td>{{ $moblie->colordev }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">نوع العطل</th>
                                    <td>{{ $moblie->typedisply }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">كلفة الصيانة</th>
                                    <td>{{ $moblie->priscall }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">حالة الجهاز</th>
                                    <td>{{ $moblie->stutstype }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">ملحقات الجهاز</ th>
                                    <td>{{ $moblie->cassdev }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">اسم المستلم</th>
                                    <td>{{ $moblie->namegiv }}</td>


                                </tr>
                                <tr>
                                    <th scope="row">تاريخ الاستلام</th>
                                    <td>{{ $moblie->timegiv }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">ملاحظة</th>
                                    <td>{{ $moblie->note }}</td>
                                </tr>
                                </tr>
                                <tr>
                                    <th scope="row">حالة الجهاز   في الشركة</th>
                                    <td>{{ $moblie->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            @if (session('seuccs'))
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong style="text-align: center"> تم </strong> {{ session('seuccs') }}
                </div>
            @endif
        </div>
        <a class="btn btn-info" href="{{ route('moble.print', ['id' => $moblie->id]) }}">طباعة</a>
        <a class="btn btn-warning " href="{{ route('moble.edit', ['id' => $moblie->id]) }}">تعديل</a>
    </div>
    </div>


    </div>
@endsection
