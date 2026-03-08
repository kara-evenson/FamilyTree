<?php

class Ancestor{
    private $id;
    private $family_tree_id;
    private $user_type_id;
    private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $prefix;
    private $suffix;
    private $birth_date;
    private $death_date;
    private $birth_place;
    private $resting_place;
    private $gender;
    private $military_service;
    private $life_description;
    private $relationship_id;
    private $parent1_id;
    private $parent2_id;
    private $occupation_id;
    private $education_id;
    private $image_lead_id;
    private $census_year;
    private $census_notes;
    private $user_comment_id;
    private $citizenship;
    private $citizen_notes;

    public function __construct(){
        $this->id = 0;
        $this->family_tree_id = 0;
        $this->user_type_id = 0;
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->password = '';
        $this->prefix = '';
        $this->suffix = '';
        $this->birth_date = '';
        $this->death_date = '';
        $this->birth_place = '';
        $this->resting_place = '';
        $this->gender = '';
        $this->military_service = '';
        $this->life_description = '';
        $this->relationship_id = 0;
        $this->parent1_id = 0;
        $this->parent2_id = 0;
        $this->occupation_id = 0;
        $this->education_id = 0;
        $this->image_lead_id = 0;
        $this->census_year = 0;
        $this->census_notes = '';
        $this->user_comment_id = 0;
        $this->citizenship = '';
        $this->citizen_notes = '';
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getFamilyTreeId(){
        return $this->family_tree_id;
    }

    public function setFamilyTreeId($family_tree_id){
        $this->family_tree_id = $family_tree_id;
    }

    public function getUserTypeId(){
        return $this->user_type_id;
    }

    public function setUserTypeId($user_type_id){
        $this->user_type_id = $user_type_id;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setFirstName($first_name){
        $this->first_name = $first_name;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function setLastName($last_name){
        $this->last_name = $last_name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPrefix(){
        return $this->prefix;
    }

    public function setPrefix($prefix){
        $this->prefix = $prefix;
    }

    public function getSuffix(){
        return $this->suffix;
    }

    public function setSuffix($suffix){
        $this->suffix = $suffix;
    }

    public function getBirthDate(){
        return $this->birth_date;
    }

    public function setBirthDate($birth_date){
        $this->birth_date = $birth_date;
    }

    public function getDeathDate(){
        return $this->death_date;
    }

    public function setDeathDate($death_date){
        $this->death_date = $death_date;
    }

    public function getBirthPlace(){
        return $this->birth_place;
    }

    public function setBirthPlace($birth_place){
        $this->birth_place = $birth_place;
    }

    public function getRestingPlace(){
        return $this->resting_place;
    }

    public function setRestingPlace($resting_place){
        $this->resting_place = $resting_place;
    }

    public function getGender(){
        return $this->gender;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getMilitaryService(){
        return $this->military_service;
    }

    public function setMilitaryService($military_service){
        $this->military_service = $military_service;
    }

    public function getLifeDescription(){
        return $this->life_description;
    }

    public function setLifeDescription($life_description){
        $this->life_description = $life_description;
    }

    public function getRelationshipId(){
        return $this->relationship_id;
    }

    public function setRelationshipId($relationship_id){
        $this->relationship_id = $relationship_id;
    }

    public function getParent1Id(){
        return $this->parent1_id;
    }

    public function setParent1Id($parent1_id){
        $this->parent1_id = $parent1_id;
    }

    public function getParent2Id(){
        return $this->parent2_id;
    }

    public function setParent2Id($parent2_id){
        $this->parent2_id = $parent2_id;
    }

    public function getOccupationId(){
        return $this->occupation_id;
    }

    public function setOccupationId($occupation_id){
        $this->occupation_id = $occupation_id;
    }

    public function getEducationId(){
        return $this->education_id;
    }

    public function setEducationId($education_id){
        $this->education_id = $education_id;
    }

    public function getImageLeadId(){
        return $this->image_lead_id;
    }

    public function setImageLeadId($image_lead_id){
        $this->image_lead_id = $image_lead_id;
    }

    public function getCensusYear(){
        return $this->census_year;
    }

    public function setCensusYear($census_year){
        $this->census_year = $census_year;
    }

    public function getCensusNotes(){
        return $this->census_notes;
    }

    public function setCensusNotes($census_notes){
        $this->census_notes = $census_notes;
    }

    public function getUserCommentId(){
        return $this->user_comment_id;
    }

    public function setUserCommentId($user_comment_id){
        $this->user_comment_id = $user_comment_id;
    }

    public function getCitizenship(){
        return $this->citizenship;
    }

    public function setCitizenship($citizenship){
        $this->citizenship = $citizenship;
    }

    public function getCitizenNotes(){
        return $this->citizen_notes;
    }

    public function setCitizenNotes($citizen_notes){
        $this->citizen_notes = $citizen_notes;
    }

}

?>