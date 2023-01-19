import React, { useState, useEffect } from "react";
import SearchBar from "./SearchBar";
import TrainingCard from "./TrainingCard";

import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

export default ({ trainings }) => {
  const [search, setSearch] = useState("");
  const [trainingList, setTrainingList] = useState([]);

  const handleSubmit = (e) => {
    e.preventDefault();
  };

  const handleChange = (e) => {
    setSearch(e.target.value);
    const filteredTrainings = trainings.filter(
      (training) =>
        training.title.toLowerCase().includes(search.toLowerCase()) ||
        training.level.toLowerCase().includes(search.toLowerCase())
    );
    setTrainingList(filteredTrainings);
  };

  useEffect(() => {
    setTrainingList(trainings);
  }, []);

  return (
    <>
      <Container className="p-5">
        <Row className="justify-content-md-center">
          <Col md={6}>
            <SearchBar
              search={search}
              handleChange={handleChange}
              handleSubmit={handleSubmit}
            />
          </Col>
        </Row>
        <Row sm={3} className="justify-content-md-center">
          {trainingList.map((training) => (
            <TrainingCard training={training} />
          ))}
        </Row>
      </Container>
    </>
  );
};
