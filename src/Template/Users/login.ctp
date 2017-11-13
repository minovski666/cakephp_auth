<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>



<div class="container text-center">

        <div class="col-md-4 col-md-offset-4">

            <div class="panel panel-default">

                <div class="panel-heading">

                    <h2 class="panel-title">Login</h2>
                </div>
                <div class="panel-body">
                        <?= $this->Form->create() ?>
                    <fieldset>
                        <div class="form-group">
                           <?php echo $this->Form->control('email'); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->control('password'); ?>
                        </div>
                        <!-- <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                            </label>
                        </div> -->
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block']) ?>
                    </fieldset>
                    <?= $this->Form->end() ?>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
                </div>
            </div>
        </div>
    
</div>