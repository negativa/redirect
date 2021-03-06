<?php

namespace Adrenth\Redirect\Models;

use Backend\Models\ImportModel;

/**
 * Class RedirectImport
 *
 * @package Adrenth\Redirect\Models
 */
class RedirectImport extends ImportModel
{
    /**
     * {@inheritdoc}
     */
    public $table = 'adrenth_redirect_redirects';

    /**
     * Validation rules
     *
     * @type array
     */
    public $rules = [
        'from_url' => 'required',
        'match_type' => 'required|in:exact,placeholders',
        'status_code' => 'required|in:301,302,404',
    ];

    /**
     * {@inheritdoc}
     */
    public function importData($results, $sessionKey = null)
    {
        foreach ($results as $row => $data) {
            try {
                $source = Redirect::make();

                $except = ['id'];

                foreach (array_except($data, $except) as $attribute => $value) {
                    if ($attribute === 'requirements') {
                        $value = json_decode($value);
                    }

                    $source->setAttribute($attribute, $value);
                }

                $source->forceSave();

                $this->logCreated();
            } catch (\Exception $e) {
                $this->logError($row, $e->getMessage());
            }
        }
    }
}
