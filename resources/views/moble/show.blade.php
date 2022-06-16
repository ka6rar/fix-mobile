@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Table</h5><span>Use a class<code>table</code> to any table.</span>
                    </div>
                    <div class="table-responsive">
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
                                    <th scope="row">كلفة الصيانة</t h>
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
                    <a href="{{ route('moble.print' , ['id' => $moblie->id]) }}">print</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
