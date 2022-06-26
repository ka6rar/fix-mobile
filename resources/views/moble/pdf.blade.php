<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">

<head>
    <style type="text/css">
        body {
            font-family: 'Almarai', sans-serif;
            font-size: 10pt;
        }

        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0px auto;
            width: 700px;
        }

        table th {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
            text-align: center;
            height: 30px;


        }

        table th,
        table td {
            padding: 5px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>

<body>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div id="customers">
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">أسم الزبون: {{ $moblie }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">تاريخ الاستلام: {{ $timegiv }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">نسخة الزبون : {{$id}}</p>
        </tr>

        <table class="table">

            <tr>
                <th scope="row">رقم الهاتف</th>
                <td>{{ $numberperson }}</td>
            </tr>
            <tr>
                <th scope="row">نوع الجهاز</th>
                <td>{{ $typedev }}</td>
            </tr>
            <tr>
                <th scope="row">لون الجهاز</th>
                <td>{{ $colordev }}</td>
            </tr>
            <tr>
                <th scope="row">نوع العطل</th>
                <td>{{ $typedisply }}</td>
            </tr>
            <tr>
                <th scope="row">كلفة الصيانة</th>
                <td>{{ $priscall }}</td>
            </tr>
            <tr>
                <th scope="row">حالة الجهاز</th>
                <td>{{ $stutstype }}</td>
            </tr>
            <tr>
                <th scope="row">ملحقات الجهاز</th>
                <td>{{ $cassdev }}</td>
            </tr>
            <tr>
                <th scope="row">اسم المستلم</th>
                <td>{{ $namegiv }}</td>
            </tr>
            </tbody>
        </table>
        <div>
        </div>
        <div style="color: rgb(70, 68, 68); text-align: end; font-size: 15px; margin: 10px">
            <span style="color:red;font-weight: bold"> ملاحظة</span> : ورشة الصيانة غير مسوؤلة عن اي عطل اخر بعد مغادرة
            الورشة , لذا يجب
            فحص الجهاز قبل المغادرة لطفا يشمل
            ضمان استبدال الشاشة الفحص داخل المركز فقط ويفتح الجهاز على مسوؤلية الزبون
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <div id="customers">
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">أسم الزبون: {{ $moblie }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">تاريخ الاستلام: {{ $timegiv }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 17px">نسخة الشركة : {{$id}} </p>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">رقم الهاتف</th>
                    <td>{{ $numberperson }}</td>
                </tr>
                <tr>
                    <th scope="row">نوع الجهاز</th>
                    <td>{{ $typedev }}</td>
                </tr>
                <tr>
                    <th scope="row">لون الجهاز</th>
                    <td>{{ $colordev }}</td>
                </tr>
                <tr>
                    <th scope="row">نوع العطل</th>
                    <td>{{ $typedisply }}</td>
                </tr>
                <tr>
                    <th scope="row">كلفة الصيانة</th>
                    <td>{{ $priscall }}</td>
                </tr>
                <tr>
                    <th scope="row">حالة الجهاز</th>
                    <td>{{ $stutstype }}</td>
                </tr>
                <tr>
                    <th scope="row">ملحقات الجهاز</th>
                    <td>{{ $cassdev }}</td>
                </tr>
                <tr>
                    <th scope="row">اسم المستلم</th>
                    <td>{{ $namegiv }}</td>
                </tr>
            </tbody>
        </table>
        <div style="color: rgb(70, 68, 68); text-align: end; font-size: 15px; margin: 10px;">
            <span style="color:red;font-weight: bold"> ملاحظة</span> : ورشة الصيانة غير مسوؤلة عن اي عطل اخر بعد مغادرة
            الورشة , لذا يجب فحص الجهاز قبل المغادرة لطفا يشمل
            ضمان استبدال الشاشة الفحص داخل المركز فقط ويفتح الجهاز على مسوؤلية الزبون
        </div>
    </div>
</body>

</html>
