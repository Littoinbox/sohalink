<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\ProjecktCalendar
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string $date_start
 * @property string $description
 * @property string|null $place
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereDateStart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar wherePlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProjecktCalendar whereUpdatedAt($value)
 */
	class ProjecktCalendar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuizeTest
 *
 * @property int $id
 * @property string $title
 * @property string|null $image
 * @property string|null $description
 * @property string|null $introText
 * @property string|null $thirty_persent_right
 * @property string|null $fifty_persent_right
 * @property string|null $seventy_persent_right
 * @property string|null $hundred_right
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereFiftyPersentRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereHundredRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereIntroText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereSeventyPersentRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereThirtyPersentRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTest whereUpdatedAt($value)
 */
	class QuizeTest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\QuizeTestQuestion
 *
 * @property int $id
 * @property int $id_quize
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $answerTrue
 * @property string|null $lastTextAnswer
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion query()
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereAnswerTrue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereIdQuize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereLastTextAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QuizeTestQuestion whereUpdatedAt($value)
 */
	class QuizeTestQuestion extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

