<?php


namespace ShiftechAfrica\Requests;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;

abstract class  LumenFormRequest extends Request
{
    public function validate()
    {
        if (false === $this->authorize()) {
            throw new UnauthorizedException();
        }

        $validator = app('validator')->make($this->all(), $this->rules(), $this->messages());

        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function resolveUser()
    {
        if (method_exists($this, 'setUserResolver')) {
            $this->setUserResolver(function () {
                return Auth::user();
            });
        }
    }

    protected function authorize()
    {
        return true;
    }

    abstract protected function rules();

    protected function messages()
    {
        return [];
    }
}
