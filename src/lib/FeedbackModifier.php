<?php

/*

This file is part of Mustard.

Mustard is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Mustard is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Mustard.  If not, see <http://www.gnu.org/licenses/>.

*/

namespace Hamjoint\Mustard\Feedback;

class FeedbackModifier extends Hamjoint\Mustard\Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedback_modifiers';

    /**
     * The database key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'feedback_modifier_id';
}
