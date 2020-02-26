<!-- DByi çek. Nasıl? 
***Model otomatik olarak çekiyo onu, istersen bi de bunu ekle "protected $table = "publishers";"
***Bunu bana controller transfer edecek "$myData = Publisher::all();
        return view("/publishers/index", compact($myData));" -->



<!-- foreachle titleları ve butonları yazdır -->
@foreach ($myData as $singleData)
  <h1>{{$singleData->title}}</h1>
  <a href="/publishers/{{$singleData->id}}">Click for details..</a>
@endforeach


<!-- butona href ver 
href beni route'daki show methoduna yani show.blade.php'ye götürsün -->