<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Nota;

use function PHPUnit\Framework\isEmpty;

class NotesControllerTest extends TestCase
{
    
    public function test_edit($id)
    {
        $notas = Nota::where('id',$id)->first();

        $this->assertTrue(condition: $notas = !isEmpty());
       
    }

}
