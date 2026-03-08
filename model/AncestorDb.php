<?php

class AncestorDb{
    public static function get_ancestors(){
        $db = Database::getDB();
        $query = 'SELECT * FROM ancestors';
        $result = $db->query($query);
        $ancestors = array();
        foreach($result as $row){
            $ancestor = self::set_ancestor_for_family_tree($row);
            $ancestors[] = $ancestor;
        }
        return $ancestors;
    }

    public static function get_ancestor_by_email_login($email, $password){
        $db = Database::getDB();
        $query = 'SELECT * FROM ancestors WHERE email = :email AND password = :password';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        if(!$row){
            return false;
        }

        return self::set_ancestor($row);

    }

    public static function get_ancestors_by_family_tree_id($family_tree_id){
        $db = Database::getDB();
        $query = 'SELECT * FROM ancestors WHERE family_tree_id = :family_tree_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':family_tree_id', $family_tree_id);
        $statement->execute();
        $ancestors = array();
        foreach($statement as $row){
            $ancestor = self::set_ancestor_for_family_tree($row);
            $ancestors[] = $ancestor;
        }
        return $ancestors;
    }

    public static function get_ancestor_by_id($id){
        $db = Database::getDB();
        $query = 'SELECT * FROM ancestors WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        if(!$row){
            return false;
        }

        return self::set_ancestor($row);

    }

    private static function set_ancestor($row){
        $ancestor = new Ancestor();
        $ancestor->setId($row['id']);
        $ancestor->setFamilyTreeId($row['family_tree_id']);
        $ancestor->setUserTypeId($row['user_type_id']);
        $ancestor->setFirstName($row['first_name']);
        $ancestor->setLastName($row['last_name']);
        $ancestor->setEmail($row['email']);
        $ancestor->setPassword($row['password']);
        $ancestor->setPrefix($row['prefix']);
        $ancestor->setSuffix($row['suffix']);
        $ancestor->setBirthDate($row['birth_date']);
        $ancestor->setDeathDate($row['death_date']);
        $ancestor->setBirthPlace($row['birth_place']);
        $ancestor->setRestingPlace($row['resting_place']);
        $ancestor->setGender($row['gender']);
        $ancestor->setMilitaryService($row['military_service']);
        $ancestor->setLifeDescription($row['life_description']);
        $ancestor->setRelationshipId($row['relationship_id']);
        $ancestor->setParent1Id($row['parent1_id']);
        $ancestor->setParent2Id($row['parent2_id']);
        $ancestor->setOccupationId($row['occupation_id']);
        $ancestor->setEducationId($row['education_id']);
        $ancestor->setImageLeadId($row['image_lead_id']);
        $ancestor->setCensusYear($row['census_year']);
        $ancestor->setCensusNotes($row['census_notes']);
        $ancestor->setUserCommentId($row['user_comment_id']);
        $ancestor->setCitizenship($row['citizenship']);
        $ancestor->setCitizenNotes($row['citizen_notes']);
        return $ancestor;
    }


    private static function set_ancestor_for_family_tree($row){
        $ancestor = new Ancestor();
        $ancestor->setId($row['id']);
                $ancestor = new Ancestor();
        $ancestor->setFamilyTreeId($row['family_tree_id']);
        $ancestor->setUserTypeId($row['user_type_id']);
        $ancestor->setFirstName($row['first_name']);
        $ancestor->setLastName($row['last_name']);
        $ancestor->setEmail($row['email']);
        $ancestor->setPassword($row['password']);
        $ancestor->setPrefix($row['prefix']);
        $ancestor->setSuffix($row['suffix']);
        $ancestor->setBirthDate($row['birth_date']);
        $ancestor->setDeathDate($row['death_date']);
        $ancestor->setBirthPlace($row['birth_place']);
        $ancestor->setRestingPlace($row['resting_place']);
        $ancestor->setGender($row['gender']);
        $ancestor->setMilitaryService($row['military_service']);
        $ancestor->setLifeDescription($row['life_description']);
        $ancestor->setRelationshipId($row['relationship_id']);
        $ancestor->setParent1Id($row['parent1_id']);
        $ancestor->setParent2Id($row['parent2_id']);
        $ancestor->setOccupationId($row['occupation_id']);
        $ancestor->setEducationId($row['education_id']);
        $ancestor->setImageLeadId($row['image_lead_id']);
        $ancestor->setCensusYear($row['census_year']);
        $ancestor->setCensusNotes($row['census_notes']);
        $ancestor->setUserCommentId($row['user_comment_id']);
        $ancestor->setCitizenship($row['citizenship']);
        $ancestor->setCitizenNotes($row['citizen_notes']);
        return $ancestor;
    }
}


?>