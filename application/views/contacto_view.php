
<div class="row" >
	<div class="span5 offset4" >
	<?php $atributos = array('class' => 'well span4', 'id' => 'myform'); ?>
	<?php echo form_open('contacto/enviar',$atributos); ?>

        <label>Nombre*
        <input type="text" name="nombre" class="span4" value="<?php echo set_value('nombre'); ?>" >
        </label>
        <span class="help-inline"><?php echo form_error('nombre', '<div class="error">', '</div>'); ?></span>
        <label>Email*
        <input type="text" name="email" class="span4" value="<?php echo set_value('email'); ?>" >
        </label>
        <span class="help-inline"><?php echo form_error('email', '<div class="error">', '</div>'); ?></span>
        <label>Comentario*
        <textarea class="span4" name="comentario" id="comentario" cols="40" rows="10">
      <?php echo set_value('comentario'); ?>
        </textarea>
         <span class="help-inline"><?php echo form_error('comentario', '<div class="error">', '</div>'); ?></span>
        </label>
        <span class="help-inline">todos los campos son obligatorios(*)</span>
        <button id="boton" type="submit" class="btn">Enviar</button>
      </form>
	</div>
</div>