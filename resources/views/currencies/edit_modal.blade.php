<div id="editCurrencyModal" class="modal fade" role="dialog" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h2>{{ __('messages.currency.edit_currency') }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{ Form::open(['id' => 'editCurrencyForm']) }}
            <div class="modal-body scroll-y">
                <div class="alert alert-danger display-none hide" id="editValidationErrorsBox"></div>
                {{ Form::hidden('currencyId', null, ['id' => 'currencyId']) }}
                <div class="row">
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('name', __('messages.common.name') . ':', ['class' => 'form-label required mb-3']) }}
                        {{ Form::text('name', null, ['id' => 'editCurrencyName', 'class' => 'form-control ', 'required', 'placeholder' => __('messages.common.name')]) }}
                    </div>
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('icon', __('messages.currency.icon') . ':', ['class' => 'form-label required mb-3']) }}
                        {{ Form::text('icon', null, ['id' => 'editCurrencyIcon', 'class' => 'form-control ', 'required', 'placeholder' => __('messages.currency.icon')]) }}
                    </div>
                    <div class="form-group col-sm-12 mb-5">
                        {{ Form::label('code', __('messages.currency.currency_code') . ':', ['class' => 'required fw-bold fs-6 mb-2']) }}
                        {{ Form::text('code', null, ['class' => 'form-control  mb-3 mb-lg-0', 'placeholder' => __('messages.currency.currency_code'), 'required', 'id' => 'editCurrencyCode']) }}
                        <div class="text-muted">
                            <b>{{ __('messages.currency.note') }}</b>
                            : {{ __('messages.currency.add_currency_code_as_per_three_letter_iso_code') }}.
                            <a href="//stripe.com/docs/currencies" class="ms-1"
                                target="_blank">{{ __('messages.currency.you_can_find_out_here') }}.</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pt-0">
                {{ Form::button(__('messages.common.save'), ['type' => 'submit', 'class' => 'btn btn-primary me-2', 'id' => 'btnEditSave', 'data-loading-text' => "<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                <button type="button" class="btn btn-secondary btn-active-light-primary"
                    data-bs-dismiss="modal">{{ __('messages.common.cancel') }}</button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
