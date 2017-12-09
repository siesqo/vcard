<?php

namespace JeroenDesloovere\VCard\Model;

/**
 * Class VCard
 *
 * @package JeroenDesloovere\VCard\Model
 */
class VCard extends \stdClass
{
    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string|null
     */
    protected $lastName;

    /**
     * @var string|null
     */
    protected $firstName;

    /**
     * @var string|null
     */
    protected $additional;

    /**
     * @var string|null
     */
    protected $prefix;

    /**
     * @var string|null
     */
    protected $suffix;

    /**
     * @var \DateTime|null
     */
    protected $birthday;

    /**
     * @var VCardAddress[][]|null
     */
    protected $address;

    /**
     * @var string[][]|null
     */
    protected $phone;

    /**
     * @var string[][]|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $revision;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $organization;

    /**
     * @var string[][]|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var VCardMedia|null
     */
    protected $photo;

    /**
     * @var VCardMedia|null
     */
    protected $logo;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var array|null
     */
    protected $categories;

    /**
     * @var string|null
     */
    protected $geo;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var string[][]|null
     */
    protected $nickname;

    /**
     * @var string[][]|null
     */
    protected $skype;

    /**
     * @var array|null
     */
    protected $item;

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     */
    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return null|string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param null|string $lastName
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param null|string $firstName
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return null|string
     */
    public function getAdditional(): ?string
    {
        return $this->additional;
    }

    /**
     * @param null|string $additional
     */
    public function setAdditional(?string $additional): void
    {
        $this->additional = $additional;
    }

    /**
     * @return null|string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    /**
     * @param null|string $prefix
     */
    public function setPrefix(?string $prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * @return null|string
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * @param null|string $suffix
     */
    public function setSuffix(?string $suffix): void
    {
        $this->suffix = $suffix;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthday(): ?\DateTime
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime|null $birthday
     */
    public function setBirthday(?\DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return VCardAddress[][]|null
     */
    public function getAddresses(): ?array
    {
        return $this->address;
    }

    /**
     * @param VCardAddress[][]|null $address
     */
    public function setAddresses(?array $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $key
     *
     * @return VCardAddress[]|null
     */
    public function getAddress(string $key): ?array
    {
        return $this->address[$key];
    }

    /**
     * @param VCardAddress $address
     * @param string       $key
     */
    public function addAddress(VCardAddress $address, string $key = ''): void
    {
        $this->address[$key][] = $address;
    }

    /**
     * @return null|string[][]
     */
    public function getPhones(): ?array
    {
        return $this->phone;
    }

    /**
     * @param null|string[][] $phone
     */
    public function setPhones(?array $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param string $key
     *
     * @return string[]|null
     */
    public function getPhone(string $key): ?array
    {
        return $this->phone[$key];
    }

    /**
     * @param string $phone
     * @param string $key
     */
    public function addPhone(string $phone, string $key = ''): void
    {
        $this->phone[$key][] = $phone;
    }

    /**
     * @return null|string[][]
     */
    public function getEmails(): ?array
    {
        return $this->email;
    }

    /**
     * @param null|string[][] $email
     */
    public function setEmails(?array $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $key
     *
     * @return string[]|null
     */
    public function getEmail(string $key): ?array
    {
        return $this->email[$key];
    }

    /**
     * @param string $email
     * @param string $key
     */
    public function addEmail(string $email, string $key = ''): void
    {
        $this->email[$key][] = $email;
    }

    /**
     * @return null|string
     */
    public function getRevision(): ?string
    {
        return $this->revision;
    }

    /**
     * @param null|string $revision
     */
    public function setRevision(?string $revision): void
    {
        $this->revision = $revision;
    }

    /**
     * @return null|string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param null|string $version
     */
    public function setVersion(?string $version): void
    {
        $this->version = $version;
    }

    /**
     * @return null|string
     */
    public function getOrganization(): ?string
    {
        return $this->organization;
    }

    /**
     * @param null|string $organization
     */
    public function setOrganization(?string $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * @return null|string[][]
     */
    public function getUrls(): ?array
    {
        return $this->url;
    }

    /**
     * @param null|string[][] $url
     */
    public function setUrls(?array $url): void
    {
        $this->url = $url;
    }

    /**
     * @param string $key
     *
     * @return string[]|null
     */
    public function getUrl(string $key): ?array
    {
        return $this->url[$key];
    }

    /**
     * @param string $url
     * @param string $key
     */
    public function addUrl(string $url, string $key = ''): void
    {
        $this->url[$key][] = $url;
    }

    /**
     * @return null|string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return null|VCardMedia
     */
    public function getPhoto(): ?VCardMedia
    {
        return $this->photo;
    }

    /**
     * @param null|VCardMedia $photo
     */
    public function setPhoto(?VCardMedia $photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return null|VCardMedia
     */
    public function getLogo(): ?VCardMedia
    {
        return $this->logo;
    }

    /**
     * @param null|VCardMedia $logo
     */
    public function setLogo(?VCardMedia $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return null|string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param null|string $note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param array|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
    }

//    /**
//     * TODO: Add functions
//     */
//    /**
//     * @return null|string
//     */
//    public function getGeo(): ?string
//    {
//        return $this->geo;
//    }
//
//    /**
//     * @param null|string $geo
//     */
//    public function setGeo(?string $geo): void
//    {
//        $this->geo = $geo;
//    }
//
//    /**
//     * @return null|string
//     */
//    public function getGender(): ?string
//    {
//        return $this->gender;
//    }
//
//    /**
//     * @param null|string $gender
//     */
//    public function setGender(?string $gender): void
//    {
//        $this->gender = $gender;
//    }
//
//    /**
//     * @return null|string[][]
//     */
//    public function getNickname(): ?array
//    {
//        return $this->nickname;
//    }
//
//    /**
//     * @param null|string[][] $nickname
//     */
//    public function setNickname(?array $nickname): void
//    {
//        $this->nickname = $nickname;
//    }
//
//    /**
//     * @return null|string[][]
//     */
//    public function getSkype(): ?array
//    {
//        return $this->skype;
//    }
//
//    /**
//     * @param null|string[][] $skype
//     */
//    public function setSkype(?array $skype): void
//    {
//        $this->skype = $skype;
//    }
//
//    /**
//     * @return array|null
//     */
//    public function getItem(): ?array
//    {
//        return $this->item;
//    }
//
//    /**
//     * @param array|null $item
//     */
//    public function setItem(?array $item): void
//    {
//        $this->item = $item;
//    }
}
