@include('Header')
     <!-- contact -->
     <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-6" style="margin-top: 90px;">
                  <div class="titlepage text_align_left">
                     <h2>S'inscrire Talenta</h2>
                  </div>
                  @if (session('message'))
                     <p class="text-success   mb-1"><Strong>{{ session('message') }}</Strong></p> 
                  @endif
                <form action="/insri_talenta" method="post">
                  @csrf
                    <div id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12">
                           <label for="">Ville (ny tanàna andraisana anjara) <span class="text-danger">*</span></label>
                           <select class="contactus"  name="ville" id="" required>
                            @foreach($villes as $ville)
                                <option value="{{$ville->idville}}">{{ $ville->nomville }}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">Nom (Anarana): <span class="text-danger">*</span></label>
                           <input class="contactus"   type="text" name="nom" required>                          
                        </div>
                        <div class="col-md-12">
                            <label for="">Age (Taona) <span class="text-danger">*</span></label>
                           <input class="contactus" type="text" name="age" required>                          
                        </div>
                        
                        <div class="col-md-12">
                           <label for="">Nom facebook (Anarana ao amin'ny facebook) <span class="text-danger">*</span></label>
                            <input class="contactus"  type="text" name="nomfacebook" required> 
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit">S'inscrire</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 "style="margin-top: 200px;">
                  <div id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12">
                            <label for="">Numero Télephone (Laharana azo iantsoana anao): <span class="text-danger">*</span></label>
                           <input class="contactus"   type="text" name="numero" required> 
                        </div>
                        <div class="col-md-12">
                            <label for="">Prenom (Fanampin’anarana): <span class="text-danger">*</span></label>
                           <input class="contactus" type="text" name="prenom" required>                          
                        </div>
                        <div class="col-md-12">
                            <label for="">Adresse (Trano fonenana) <span class="text-danger">*</span></label>
                           <input class="contactus" type="text" name="adresse" required>                          
                        </div>
                        <div class="col-md-12">
                            <label for="">Description de la prestation (Ny karazana Seho ho atao):  <span class="text-danger">*</span></label>
                           <textarea class="textarea"  type="text" Message="Name" name="descriptions" required></textarea>
                        </div>
                        
                     </div>
                    </div>
                    
               </div>
               </form>
            </div>
         </div>
      </div>
      <!-- contact -->
@include('Footer');