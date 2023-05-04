<?php include 'navbar.php' ?>

    <style>
       

.container-fluid
{
    text-align: center;
    
}

.container-fluid h1 
{
    font-size: 3rem;
    margin-bottom: 5rem;
    color: violet;
}

.container-fluid label
{
    font-size: 2rem;
   
}

.container-fluid input
{
    width: 40%;
    text-align: center;
    padding: 1%;
    font-size: 2rem;
}

#mean
{
    font-size: 2rem;
    text-align: center;
    

}

@media (max-width: 800px)
{
  .nice
  {
    font-size: 2rem;
  }
  input[type='text']{
    font-size: 1rem;
  }
  .btn
  {
    width: 50%;
    
  }
  .btn:hover
  {
    width: 50%;
    
  }

}


    </style>
 
 

    <div class="container-fluid">
        <div class="jumbotron" style="background-color: #273B3A;">
        <h1><span class="nice"></span></h1>

        <label for="word">Enter Word: </label> <br> <br>
        <input type="text" id="myText" placeholder="Enter Word"> <br> <br> 

        <button type="button" class="btn btn-outline-warning text-white" onclick="myFunction()">Menaing</button>  <br> <br>


        <label for="mean">Meaning: </label> <br> <br>
        <textarea name="mean" id="mean" cols="50" rows="70" style="margin: 0px; width: 60%; height: 200px;"></textarea>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        let array1 = 
{
    come : "আসা , হওয়া , ঘটা , পাওয়া , প্রতিভাত হওয়া",
    get : "পাওয়া, অর্জন করা, আনা",
    give :"দান করা , প্রদান করা , দিয়ে দেওয়া , অর্পণ করা",
    go : "চলা , যাওয়া , গমন করা , ছেড়ে যাওয়া , বিদায় হওয়া , এগোনো , তেজ",
    keep :"রাখা; ধরা; পালন করা; রক্ষা করা; তত্ত্বাবধান করা",
    let : "কোনো কিছু করতে দেওয়া , ভাড়া বা খাজনায় দেওয়া , ব্যাহত করা",
    make : "সৃষ্টি করা, গঠন, বা তৈরি করা",
    put:"রাখা, স্থাপন করা",
    seem:"বোধ হওয়া; প্রতিভাত হওয়া",
    take:"গ্রহণ করা; লওয়া; ধরিয়া বা ্র্রধরে ফেলা; নিয়া যাওয়া",
    put:"রাখা, স্থাপন করা",
    seem:"বোধ হওয়া; প্রতিভাত হওয়া",
    take: "গ্রহণ করা; লওয়া; ধরিয়া বা ্র্রধরে ফেলা; নিয়া যাওয়া",
    be: "হত্তয়া , থাকা , বর্তমান থাকা (, অস্তিমান থাকা , অবস্থাপ্রাপ্ত হত্তয়া , হইয়া ত্তঠা , পরিণত হত্তয়া, বর্তমান হত্তয়া (V), ঘটা , দাম লাগা",
    do: "করা",
    have: "অধিকারে পাওয়া,গ্রহণ করা",
    say: "বলা , কথা বলা , উচ্চারণ করা , কহা ; কওয়া",
    see: "দেখা, দর্শন করা; উপলব্ধি করা",
    send: "পাঠানো, প্রেরণ করা",
    may: "পারা , ইংরেজী বৎসরের পঞ্চম মাস , পুষ্পবিশেষ",
    will:"সংকল্প; ভবিষ্যৎ বুঝাইতে, ইচ্ছা, অভিপ্রায় ইত্যাদি বুঝাইতে ব্যবহৃত",
    about:"বিষয়ে , নিকট , প্রায় , ব্যাপৃত , ঘুরিয়া , চতুর্দিকে, ইতস্তত , আশেপাশে , প্রায় কাছাকাছি , আসন্ন ",
    across:"আড়াআড়ি , চওড়া-চওড়ি , এপার থেকে ওপার",
    after:"পরে",
    against:"বিপক্ষে , প্রতিকূলে , বিরুদ্ধে",
    among:"অনেকের বা বহুর মধ্যে",
    at:"প্রতি (Prep.), মধ্যে, নিকট",
    before:"সম্মুখে, আগে, পূর্বে",
    between:"মধ্যিখানে , মধ্যবর্তী; দুয়ের মধ্যে, পরস্পরের মধ্যে",
    by:"কাছে; পাশে; নিকটে; ধারে",
    down:"নীচে; নিম্নে; নিম্নাভিমুখে; নীচের দিকে, (গতি নির্দেশক ক্রিয়াপদের সাথে) উচ্চ অবস্থান থেকে নিম্ন অবস্থানে",
    from:"থেকে , হতে , হইতে",
    in:"ভিতরে, মধ্যে",
    
}

// word = prompt("Enter Word: ");

// for (i in array1)
// {
//     if (word == i)
//     {
//         let a = array1[i]
//         document.getElementById('wordmean').innerHTML = a;
//     }
// }




function myFunction()
{
    var x = document.getElementById("myText").value;
    for (i in array1)
{
    if (x.toLowerCase() == i)
    {
        let c = array1[i]
        document.getElementById('mean').innerHTML = c;

    }
}
    
}
    </script>

<script type="text/javascript" src="typed.js"></script>
<script type="text/javascript">
      var typed = new Typed('.nice', {
    strings: ["THIS IS A DICTIONARY"],
    typeSpeed: 100,
    backSpeed: 100,
    loop:true,
  });
</script>

