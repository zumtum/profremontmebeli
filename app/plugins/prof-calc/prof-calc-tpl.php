<?php $result = '<div class="calc">
	<ul class="step">
		<li class="activeli"><a class="active" href="#" data-step="1"><i class="mobile-hide">1</i>. Тип</a></li>
		<li><a href="#" data-step="2"><i class="mobile-hide">2</i>. Параметры</a></li>
		<li><a href="#" data-step="3"><i class="mobile-hide">3</i>. Материалы</a></li>
		<li><a href="#" data-step="4"><i class="mobile-hide">4</i>. Стоимость</a></li>	
	</ul>
<!-- Шаги -->	
<form id="render">	

<div id="step1">		
	<h2 class="ctitle">Выберите тип мебели</h2>	

	<div>
		' . RenderStep1() . '
	</div>	
	<span class="next-steps">
		<span class="stepnext" alt="2">Далее</span>
	</span>	
</div>

<div id="step2">		
	<h2 class="ctitle">Параметры мебели</h2>			

	<div>
		' . RenderStep2() . '
	</div>	
	<span class="next-steps">
		<span class="stepnext" alt="3">Далее</span>
		<span class="stepprev" alt="1">Назад</span>	
	</span>
</div>


<div id="step3">		
	<h2 class="ctitle">Материал обивки</h2>	

	<div>
		' . RenderStep3() . '
	</div>
	<span class="next-steps">
		<span class="stepnext" alt="4">Далее</span>
		<span class="stepprev" alt="2">Назад</span>
	</span>
</div>


<div id="step4">		
	<h2 class="ctitle">Расчет стоимости</h2>				
	<div>
		<ul class="itogo">
			<li><div>Работа от</div><p><span class="irab">0</span> р.</p></li>
			<li><div>Материалы от</div><p><span class="imat">0</span> р.</p></li>
			<li><div>Итого от*</div><p><span class="isum">0</span> р.</p></li>
		</ul>
		<div style="clear:both"></div>
		
		<div class="order_special">Выезд мастера с образцами материалов (более 300 видов) - <span>бесплатно!</span>
		</div>
		<div class="order_desc">* стоимость доставки мебели в одну сторону составляет 2000р, в обе стороны - 4000р.<br>
		Результат расчета является приблизительным, полную стоимость работ мастер сможет соообщить после выезда и оценки
		</div>
		<h2>Оформить заказ</h2>
		<div class="senders">	
			<div class="sendform">
				<input id="itog1" class="fname" type="text" name="name" placeholder="Вас зовут">
				<input id="itog2" class="fname" type="tel" name="phone" maxlength="12" placeholder="Контактный телефон">
				<span>Отправить заявку</span>
			</div>
			
		</div>
	</div>	
	<span class="next-steps">
		<span class="stepprev" alt="3">Назад</span>
		<div class="order_desc">Нажимая кнопку «Вызвать мастера», я даю свое согласие на обработку персональных данных в соответствие с законом №152-ФЗ «О персональных данных» и принимаю условия <a target="_blank" href="http://www.profremontmebeli.ru/politika-konfidencialnosti.html">политики об обработке персональных данных</a></div>
	</span> 	
</div>

</form>
<!-- /Шаги -->

</div>';
?>