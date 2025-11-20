<?php

namespace srag\Plugins\UserDefaults\UserSearch;

use ActiveRecord;
use ilException;
use ilUserDefaultsPlugin;
use srag\Plugins\UserDefaults\Utils\UserDefaultsTrait;

/**
 * Class usrdefUser
 */
class usrdefUser extends ActiveRecord
{
    use UserDefaultsTrait;

    const TABLE_NAME = "usr_data";
    const PLUGIN_CLASS_NAME = ilUserDefaultsPlugin::class;

    public function getConnectorContainerName(): string
    {
        return self::TABLE_NAME;
    }

    public static function returnDbTableName(): string
    {
        return self::TABLE_NAME;
    }

    /**
     * Disallow create/update/delete via this AR wrapper
     */
    public function create(): void
    {
        throw new ilException('ActiveRecord Class ' . __CLASS__ . ' is not allowed to ' . __METHOD__ . ' objects');
    }

    public function update(): void
    {
        throw new ilException('ActiveRecord Class ' . __CLASS__ . ' is not allowed to ' . __METHOD__ . ' objects');
    }

    public function delete(): void
    {
        throw new ilException('ActiveRecord Class ' . __CLASS__ . ' is not allowed to ' . __METHOD__ . ' objects');
    }

    /**
     * @con_has_field    true
     * @con_fieldtype    integer
     * @con_length       11
     * @con_sequence     true
     * @con_is_notnull   true
     * @con_is_primary   true
     * @con_is_unique    true
     */
    protected ?int $usr_id;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    190
     */
    protected ?string $login = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    80
     */
    protected ?string $passwd = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    128
     */
    protected ?string $firstname = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    128
     */
    protected ?string $lastname = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    32
     */
    protected ?string $title = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    1
     */
    protected ?string $gender = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    128
     */
    protected ?string $email = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    80
     */
    protected ?string $institution = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    512
     */
    protected ?string $street = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $city = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    10
     */
    protected ?string $zipcode = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $country = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $phone_office = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $last_login = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $last_update = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $create_date = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    4000
     */
    protected ?string $hobby = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    80
     */
    protected ?string $department = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $phone_home = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $phone_mobile = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $fax = null;

    /**
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    11
     */
    protected ?int $time_limit_owner = null;

    /**
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    11
     */
    protected ?int $time_limit_unlimited = null;

    /**
     * bigint
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    20
     */
    protected ?int $time_limit_from = null;

    /**
     * bigint
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    20
     */
    protected ?int $time_limit_until = null;

    /**
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    11
     */
    protected ?int $time_limit_message = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    250
     */
    protected ?string $referral_comment = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    40
     */
    protected ?string $matriculation = null;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     11
     * @con_is_notnull true
     */
    protected int $active;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $approve_date = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $agree_date = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    255
     */
    protected ?string $client_ip = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    10
     */
    protected ?string $auth_mode = null;

    /**
     * @con_has_field true
     * @con_fieldtype integer
     * @con_length    11
     */
    protected ?int $profile_incomplete = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    255
     */
    protected ?string $ext_account = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    32
     */
    protected ?string $feed_hash = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    30
     */
    protected ?string $latitude = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    30
     */
    protected ?string $longitude = null;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     11
     * @con_is_notnull true
     */
    protected int $loc_zoom;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     4
     * @con_is_notnull true
     */
    protected int $login_attempts;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     11
     * @con_is_notnull true
     */
    protected int $last_password_change;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    32
     */
    protected ?string $reg_hash = null;

    /**
     * date
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $birthday = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    2
     */
    protected ?string $sel_country = null;

    /**
     * longtext
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $last_visited = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $inactivation_date = null;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     4
     * @con_is_notnull true
     */
    protected int $is_self_registered;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    10
     */
    protected ?string $passwd_enc_type = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    32
     */
    protected ?string $passwd_salt = null;

    /**
     * @con_has_field true
     * @con_fieldtype text
     * @con_length    80
     */
    protected ?string $second_email = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $first_login = null;

    /**
     * datetime
     * @con_has_field true
     * @con_fieldtype text
     */
    protected ?string $last_profile_prompt = null;

    /**
     * @con_has_field  true
     * @con_fieldtype  integer
     * @con_length     4
     * @con_is_notnull true
     */
    protected int $passwd_policy_reset;

    public function getUsrId(): int
    {
        return $this->usr_id;
    }

    public function setUsrId(int $usr_id): void
    {
        $this->usr_id = $usr_id;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(?string $login): void
    {
        $this->login = $login;
    }

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(?string $passwd): void
    {
        $this->passwd = $passwd;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getInstitution(): ?string
    {
        return $this->institution;
    }

    public function setInstitution(?string $institution): void
    {
        $this->institution = $institution;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getZipcode(): ?string
    {
        return $this->zipcode;
    }

    public function setZipcode(?string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getPhoneOffice(): ?string
    {
        return $this->phone_office;
    }

    public function setPhoneOffice(?string $phone_office): void
    {
        $this->phone_office = $phone_office;
    }

    public function getLastLogin(): ?string
    {
        return $this->last_login;
    }

    public function setLastLogin(?string $last_login): void
    {
        $this->last_login = $last_login;
    }

    public function getLastUpdate(): ?string
    {
        return $this->last_update;
    }

    public function setLastUpdate(?string $last_update): void
    {
        $this->last_update = $last_update;
    }

    public function getCreateDate(): ?string
    {
        return $this->create_date;
    }

    public function setCreateDate(?string $create_date): void
    {
        $this->create_date = $create_date;
    }

    public function getHobby(): ?string
    {
        return $this->hobby;
    }

    public function setHobby(?string $hobby): void
    {
        $this->hobby = $hobby;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    public function getPhoneHome(): ?string
    {
        return $this->phone_home;
    }

    public function setPhoneHome(?string $phone_home): void
    {
        $this->phone_home = $phone_home;
    }

    public function getPhoneMobile(): ?string
    {
        return $this->phone_mobile;
    }

    public function setPhoneMobile(?string $phone_mobile): void
    {
        $this->phone_mobile = $phone_mobile;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): void
    {
        $this->fax = $fax;
    }

    public function getTimeLimitOwner(): ?int
    {
        return $this->time_limit_owner;
    }

    public function setTimeLimitOwner(?int $time_limit_owner): void
    {
        $this->time_limit_owner = $time_limit_owner;
    }

    public function getTimeLimitUnlimited(): ?int
    {
        return $this->time_limit_unlimited;
    }

    public function setTimeLimitUnlimited(?int $time_limit_unlimited): void
    {
        $this->time_limit_unlimited = $time_limit_unlimited;
    }

    public function getTimeLimitFrom(): ?int
    {
        return $this->time_limit_from;
    }

    public function setTimeLimitFrom(?int $time_limit_from): void
    {
        $this->time_limit_from = $time_limit_from;
    }

    public function getTimeLimitUntil(): ?int
    {
        return $this->time_limit_until;
    }

    public function setTimeLimitUntil(?int $time_limit_until): void
    {
        $this->time_limit_until = $time_limit_until;
    }

    public function getTimeLimitMessage(): ?int
    {
        return $this->time_limit_message;
    }

    public function setTimeLimitMessage(?int $time_limit_message): void
    {
        $this->time_limit_message = $time_limit_message;
    }

    public function getReferralComment(): ?string
    {
        return $this->referral_comment;
    }

    public function setReferralComment(?string $referral_comment): void
    {
        $this->referral_comment = $referral_comment;
    }

    public function getMatriculation(): ?string
    {
        return $this->matriculation;
    }

    public function setMatriculation(?string $matriculation): void
    {
        $this->matriculation = $matriculation;
    }

    public function getActive(): int
    {
        return $this->active;
    }

    public function setActive(int $active): void
    {
        $this->active = $active;
    }

    public function getApproveDate(): ?string
    {
        return $this->approve_date;
    }

    public function setApproveDate(?string $approve_date): void
    {
        $this->approve_date = $approve_date;
    }

    public function getAgreeDate(): ?string
    {
        return $this->agree_date;
    }

    public function setAgreeDate(?string $agree_date): void
    {
        $this->agree_date = $agree_date;
    }

    public function getClientIp(): ?string
    {
        return $this->client_ip;
    }

    public function setClientIp(?string $client_ip): void
    {
        $this->client_ip = $client_ip;
    }

    public function getAuthMode(): ?string
    {
        return $this->auth_mode;
    }

    public function setAuthMode(?string $auth_mode): void
    {
        $this->auth_mode = $auth_mode;
    }

    public function getProfileIncomplete(): ?int
    {
        return $this->profile_incomplete;
    }

    public function setProfileIncomplete(?int $profile_incomplete): void
    {
        $this->profile_incomplete = $profile_incomplete;
    }

    public function getExtAccount(): ?string
    {
        return $this->ext_account;
    }

    public function setExtAccount(?string $ext_account): void
    {
        $this->ext_account = $ext_account;
    }

    public function getFeedHash(): ?string
    {
        return $this->feed_hash;
    }

    public function setFeedHash(?string $feed_hash): void
    {
        $this->feed_hash = $feed_hash;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLocZoom(): int
    {
        return $this->loc_zoom;
    }

    public function setLocZoom(int $loc_zoom): void
    {
        $this->loc_zoom = $loc_zoom;
    }

    public function getLoginAttempts(): int
    {
        return $this->login_attempts;
    }

    public function setLoginAttempts(int $login_attempts): void
    {
        $this->login_attempts = $login_attempts;
    }

    public function getLastPasswordChange(): int
    {
        return $this->last_password_change;
    }

    public function setLastPasswordChange(int $last_password_change): void
    {
        $this->last_password_change = $last_password_change;
    }

    public function getRegHash(): ?string
    {
        return $this->reg_hash;
    }

    public function setRegHash(?string $reg_hash): void
    {
        $this->reg_hash = $reg_hash;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getSelCountry(): ?string
    {
        return $this->sel_country;
    }

    public function setSelCountry(?string $sel_country): void
    {
        $this->sel_country = $sel_country;
    }

    public function getLastVisited(): ?string
    {
        return $this->last_visited;
    }

    public function setLastVisited(?string $last_visited): void
    {
        $this->last_visited = $last_visited;
    }

    public function getInactivationDate(): ?string
    {
        return $this->inactivation_date;
    }

    public function setInactivationDate(?string $inactivation_date): void
    {
        $this->inactivation_date = $inactivation_date;
    }

    public function getIsSelfRegistered(): int
    {
        return $this->is_self_registered;
    }

    public function setIsSelfRegistered(int $is_self_registered): void
    {
        $this->is_self_registered = $is_self_registered;
    }

    public function getPasswdEncType(): ?string
    {
        return $this->passwd_enc_type;
    }

    public function setPasswdEncType(?string $passwd_enc_type): void
    {
        $this->passwd_enc_type = $passwd_enc_type;
    }

    public function getPasswdSalt(): ?string
    {
        return $this->passwd_salt;
    }

    public function setPasswdSalt(?string $passwd_salt): void
    {
        $this->passwd_salt = $passwd_salt;
    }

    public function getSecondEmail(): ?string
    {
        return $this->second_email;
    }

    public function setSecondEmail(?string $second_email): void
    {
        $this->second_email = $second_email;
    }

    public function getFirstLogin(): ?string
    {
        return $this->first_login;
    }

    public function setFirstLogin(?string $first_login): void
    {
        $this->first_login = $first_login;
    }

    public function getLastProfilePrompt(): ?string
    {
        return $this->last_profile_prompt;
    }

    public function setLastProfilePrompt(?string $last_profile_prompt): void
    {
        $this->last_profile_prompt = $last_profile_prompt;
    }

    public function getPasswdPolicyReset(): int
    {
        return $this->passwd_policy_reset;
    }

    public function setPasswdPolicyReset(int $passwd_policy_reset): void
    {
        $this->passwd_policy_reset = $passwd_policy_reset;
    }
}