@extends('layouts.app')
@section('content')
    <div class="container" style="font-size: 16px;  font-family: 'Cairo', sans-serif; font-weight: bold" >


        <div class="card">
            <div class="card-header">
                <h5>كل الاجهز </h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">التسلسل</th>
                            <th scope="col">اسم الزبون</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">نوع الجهاز</th>
                            <th scope="col">كلفة الصيانة</th>
                            <th scope="col">اسم المستلم</th>
                            <th scope="col">تاريخ الاستلام</th>
                            <th scope="col">التفاصيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($moblies as $moblie)
                        <tr>
                            <td>{{$moblie->id}}</td>
                            <td>{{$moblie->nameperson}}</td>
                            <td>{{$moblie->numberperson}}</td>
                            <td>{{$moblie->typedev}}</td>
                            <td>{{$moblie->priscall}}</td>
                            <td>{{$moblie->namegiv}}</td>
                            <td>{{$moblie->timegiv}}</td>
                             <td>
                                <a href="{{ route('moble.show', ['id'=> $moblie->id]) }}">عرض</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
         
        </div>
     
    </div>
@endsection
