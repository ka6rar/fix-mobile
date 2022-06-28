<html xmlns="http://www.w3.org/1999/xhtml" dir="rtl">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./css/crad.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<head>


<body>
    <style type="text/css">
        body {
            font-family: 'Almarai', sans-serif;
            font-size: 14pt;
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

    <div id="customers">
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">أسم الزبون: {{ $moblie }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">تاريخ الاستلام: {{ $timegiv }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">نسخة الزبون : {{ $id }}</p>
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
        <div style="color: rgb(70, 68, 68); text-align: end; font-size: 13px; margin: 10px">
            <span style="color:red;font-weight: bold"> ملاحظة</span> : ورشة الصيانة غير مسوؤلة عن اي عطل اخر بعد مغادرة
            الورشة , لذا يجب
            فحص الجهاز قبل المغادرة لطفا يشمل
            ضمان استبدال الشاشة الفحص داخل المركز فقط ويفتح الجهاز على مسوؤلية الزبون
        </div>
    </div>
    <br />

    <div id="customers">
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">أسم الزبون: {{ $moblie }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">تاريخ الاستلام: {{ $timegiv }}</p>
        <p style="margin: 0px 7px 0px 0px;font-size: 15px">نسخة الشركة : {{ $id }} </p>
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
        <div
            style="            background-color: #F7F7F7;
                border: 1px solid #ccc;

    color: #333;
    font-weight: bold;
    font-size: 13px
    ">
            ملاحظة  : {{$namegiv}}
        </div>
    </div>
</body>

</html>
