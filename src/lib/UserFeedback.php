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

class UserFeedback extends \Hamjoint\Mustard\Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_feedback';

    /**
     * The database key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'user_feedback_id';

    /**
     * Return true if feedback is positive.
     *
     * @return boolean
     */
    public function isPositive()
    {
        return $this->rating > 0;
    }

    /**
     * Return true if feedback is negative.
     *
     * @return boolean
     */
    public function isNegative()
    {
        return $this->rating < 0;
    }

    /**
     * Return true if feedback is neutral.
     *
     * @return boolean
     */
    public function isNeutral()
    {
        return $this->rating == 0;
    }

    /**
     * Scope of positive feedback.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopePositive($query)
    {
        return $query->where('rating', '>', 0);
    }

    /**
     * Scope of negative feedback.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNegative($query)
    {
        return $query->where('rating', '<', 0);
    }

    /**
     * Scope of neutral feedback.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNeutral($query)
    {
        return $query->where('rating', 0);
    }

    /**
     * Relationship to a purchase.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchase()
    {
        return $this->belongsTo('\Hamjoint\Mustard\Commerce\Purchase');
    }

    /**
     * Relationship to a rating user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rater()
    {
        return $this->belongsTo('\Hamjoint\Mustard\User', 'rater_user_id');
    }

    /**
     * Relationship to a rated user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject()
    {
        return $this->belongsTo('\Hamjoint\Mustard\User', 'subject_user_id');
    }
}
