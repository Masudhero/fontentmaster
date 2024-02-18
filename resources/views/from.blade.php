
@extends('layouts.master');
@section('content')
<div class="registion-section">
    <div class="container">
        <div class="registion d-flex">
            <div class="registion-right">
                <h2 class="w-2 fs-2 mt-2">Registration to our next
                    Bandhorban tour.</h2>
                    <h5 class="w-2 fs-5 mt-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</h5>

                    <button class="highlight mt-2">Join now</button>
            </div>
            <!-- registion section form start  -->
            <div class="registion-left mt-2">
                <form action="#">
                    <label for="name" class="fs-4 w-3">name</label> <br><br>
                    <input type="text" placeholder="name"><br><br>
                    <label for="Contact" class="fs-4 w-3">Contact</label> <br><br>
                    <input type="number" placeholder="phone number"><br><br>
                    <label for="person" class="fs-4 w-3">Person</label><br><br>
                    <input type="password" placeholder="phone number person"><br><br>
                    <label for="picking poient" class="fs-4 w-3">Picking Poient</label><br><br>
                    <input type="text" placeholder="type your poient"  value=""><br><br>
                    <label class="fs-4 w-3" for="massage">Massage</label><br><br>
                   <textarea name="massage" id="massage" cols="30" rows="10" placeholder="type massage"></textarea>
                   <br><br>
                   <!-- form button registion  -->
                   <input type="submit" value="Register" id="register">
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection

