<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;



class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => ' lorem ipsum dolor sit amet consectetur adipisicing alit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid , quam illum quaerat consequatar! Expedita ab consectetur tenetur delensiti'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => ' lorem ipsum dolor sit amet consectetur adipisicing alit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid \, quam illum quaerat consequatar! Expedita ab consectetur tenetur delensiti'
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => ' lorem ipsum dolor sit amet consectetur adipisicing alit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid \, quam illum quaerat consequatar! Expedita ab consectetur tenetur delensiti'
            ]
        ];
    }

    public static function find($id)
    {
        $listings  = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
