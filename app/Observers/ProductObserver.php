<?php


namespace App\Observers;

use Illuminate\Http\UploadedFile;
use App\Product;
use Illuminate\Support\Facades\Storage;

class ProductObserver
{
    use UploadObserverTrait;

    protected $field = 'url';
    protected $path = 'img/';

    public function creating(Product $model)
    {
        $this->sendFile($model);
    }

    public function deleting(Product $model)
    {
        $this->removeFile($model);
    }

    public function updating(Product $model)
    {
        $this->updateFile($model);
    }
}
