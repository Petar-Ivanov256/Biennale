<hr>
<footer id="BladeFooter">
   <div class="container">
       <div class="row">
           <div class="col-md-10 footer-move-left" id="return-footer">
               <div class="col-md-2">
                   <p id="footer_sin">с подкрепата на<br><span id="footer_span">Tianaderrah Foundation</span></p>
               </div>
               <div class="col-md-2">
                   <ul>
                       <li>
                           <a  href="{{ URL::to('/program')}}">Програма</a>
                       </li>
                       <li>
                           <a  href="{{ URL::to('/terms')}}">Регламент</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/apply-for-attendance')}}">Форма за участие</a>
                       </li>
                       <li>
                           <a  href="{{ URL::to('/vision')}}">Визия</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-2">
                   <ul>
                       <li>
                           <a href={{ URL::to('/bachelor')}}>Стипендии за бакалавър</a>
                       </li>
                       <li>
                           <a href={{ URL::to('/master')}}>Стипендии за магистър</a>
                       </li>
                       <li>
                           <a href={{ URL::to('/phd')}}>Стипендии за доктор</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/authors')}}">Автори</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-1">
                   <ul>
                       <li>
                           <a href="#">Изложби</a>
                       </li>
                       <li>
                           <a href="#">Ателиета</a>
                       </li>
                       <li>
                           <a href="#">Лекции</a>
                       </li>
                       <li>
                           <a href="#">Галерия</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-2">
                   <ul>
                       <li>
                           <a href="{{ URL::to('/about')}}">За нас</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/partners')}}">Партньори</a>
                       </li>
                       <li>
                           <a href="{{ URL::to('/contact')}}">Контакти</a>
                       <li>
                           <a href="{{ URL::to('/archive')}}">Архив</a>
                       </li>
                   </ul>
               </div>
               <div class="col-md-2">
                   <form>
                       <label for="email" id="Newsletter">Месечен бюлетин</label><br>
                       <input type="email" name="email" placeholder="e-mail" id="e-mail"><br><br>
                       <button type="submit" class="btn-submit">Запиши се</button>
                   </form>
               </div>
           </div>
       </div>

   </div>
</footer>