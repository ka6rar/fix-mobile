@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row" style="font-size: 16px;  font-family: 'Cairo', sans-serif; font-weight: bold" dir="rtl" >
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>صيانة</h5><span>{{$moblie->typedev }}</span>
                    </div>
                    <div class="table-responsive" >
                        <table class="table">
                            <tbody>
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
                            </tbody>
                        </table>
                    </div>
                   
                </div>
            </div>
          
        </div>
        <a class="btn btn-info" href="{{ route('moble.print' , ['id' => $moblie->id]) }}">طباعة</a>
    </div>
    </div>
    </div>
@endsection
