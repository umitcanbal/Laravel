<!-- buraya buton tıklayınca beni getirmesi lazım (routeta tanımlanan URL objeye bağlı, direkt bir URL değil), e butonun href'ine loop'la render edilen her bir objede eşsiz olan bir value'yu yazdırmam lazım, bu id olmak zorunda değil, title de olabilir, buraya ne gelirle gelsin routetaki URL'i ("/publishers/{publisher_id}") sağlayacağı için beni PublisherControllerda deklare edilen show methoduna götürür. Show methodunun da beni buraya getirmesi lazım ki benim burada renderladığım şeyi returnlesin ki browserda göreyim. E ben buraya tek bir objeyi renderlıyorum, bu objenin ne olacağını da bi şekilde PublisherControllerdaki show methoduna seçtirmem lazım, bu da ancak routedaki argumentin ({publisher_id}) PublisherControllerdaki methodun içine parametre olarak girmesiyle mümkün ki methodun içinde DB'den istediğim spesifik objeyi seçim, tüm table'ı/arrayi seçmeyeyim. id kullandım, title da kullanabilirdim(sorun çıkartıyo ama boşluk vs yüzünden). -->

 <!-- ******ÇOK ÖNEMLİ AŞAĞIDAKİ DÖNGÜ
<a href="/publishers/{'{$singleData->id}'}" buradaki        ""{'{$singleData->id}'}""  ====> 
                                                          ****/{publisher_id}****   ====>          (Routedaki)                 
                                                               ****($id)****       ====>          (public function show($id))  
*******ÇOK ÖNEMLİ   -->


<h1>{{$mySinglePublisher->title}}</h1>
<h3>{{$mySinglePublisher->created_at}}</h3>
<h3>{{$mySinglePublisher->updated_at}}</h3>
<h3>The other books that belongs to the same publisher</h3> 

<ul>
  @foreach($mySinglePublishersBooks as $mySinglePublishersBook)
    <li>{{$mySinglePublishersBook->title}}</li>
  @endforeach
</ul>
<a href="/publishers">Back to ..</a>


